<?php


class Authentication
{
    private $server;
    /**
     * @var string
     */

    function __construct()
    {
        require_once 'Database.php';
        require_once 'server/helpers.php';
        $db = new Database();
        $this->server = $db->connect();
    }

    private function getIPADDR()
    {
        $ip = getenv('HTTP_CLIENT_IP')?:
            getenv('HTTP_X_FORWARDED_FOR')?:
                getenv('HTTP_X_FORWARDED')?:
                    getenv('HTTP_FORWARDED_FOR')?:
                        getenv('HTTP_FORWARDED')?:
                            getenv('REMOTE_ADDR');

        return $ip;
    }

    public function Auth_In($var1, $var2)
    {
        $user = $var1;
        $password = $var2;

        $sql = $this->server->prepare('SELECT email, userID, password FROM user WHERE email = ? OR phone = ?');
        $sql->bind_param('ss', $user, $user);
        $sql->execute();
        $result = $sql->get_result();
        $data = $result->fetch_assoc();

        if($result->num_rows < 1)
        {
            return 'ERROR';
        }else{
            if(!password_verify($password, $data['password']))
            {
                return 'ERROR';
            }else{
                //check if register page exists, if it does, delete it
                if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.HOME_PATH.'/register.php'))
                {
                    unlink($_SERVER['DOCUMENT_ROOT'].'/'.HOME_PATH.'/register.php');
                }

                //set login session
                $_SESSION['userID'] = $data['userID'];

                $email = $data['email'];
                $userID = $data['userID'];
                $logState = 1;
                $note = 'User Log In';
                $date = date('Y-m-d H:i:sa');

                $ip = $this->getIPADDR();

                //log user login details into system
                $signout = $this->server->prepare('INSERT INTO syslog (userID, email, ipaddr, logState, note, timelog)
                VALUES(?, ?, ?, ?, ?, ?)');
                $signout->bind_param('ssssss', $userID, $email, $ip, $logState, $note, $date);
                $signout->execute();

                return 'SUCCESS';
            }
        }
    }

    public function AuthRegister($fullname, $email, $phone, $workID, $password)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return 'E_EMAIL';
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $date = date("Y-m-d H:i:sa");

            //set ip address
            $ip = $this->getIPADDR();
            $note = 'User '.$fullname.' just registered into system';

            $register = $this->server->prepare('INSERT INTO user(fullname, email, phone, userID, password, date) 
            VALUES(?,?,?,?,?,?)');
            $register->bind_param('ssssss', $fullname, $email, $phone, $workID, $hash, $date);
            $register->execute();

            //log user reg into logs
            $signout = $this->server->prepare('INSERT INTO syslog (userID, email, ipaddr, note, timelog)
                    VALUES(?, ?, ?, ?, ?)');
            $signout->bind_param('sssss', $workID, $email, $ip, $note, $date);
            $signout->execute();

            return 'SUCCESS';
        }
    }

    public function AuthLogout($userID)
    {
        $checkID = $this->server->prepare('SELECT userID, email FROM user WHERE userID = ?');
        $checkID->bind_param('s', $userID);$checkID->execute() or die($this->server->error);
        $ID_query = $checkID->get_result(); $ID_row = $ID_query->fetch_assoc();

        if($ID_row < 1)
        {
            return 'ERROR';
        }else{
            $ID_result = $ID_query->fetch_assoc();

            $username = $ID_result['email'];
            $userID = $ID_result['userID'];
            $logState = 0;
            $note = 'User Log out';
            $date = date('Y-m-d H:i:sa');

            //set ip address
            $ip = $this->getIPADDR();

            $signout = $this->server->prepare('INSERT INTO syslog (userID, email, ipaddr, logState, note, timelog)
                    VALUES(?, ?, ?, ?, ?, ?)');
            $signout->bind_param('ssssss', $userID, $username, $ip, $logState, $note, $date);
            $signout->execute();
            if($signout->execute())
            {
                unset($_SESSION['userID']);
                return 'SUCCESS';
            }else{
                return 'ERROR2';
            }
        }
    }
}