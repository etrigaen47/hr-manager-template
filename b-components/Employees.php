<?php

class Employees{

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

    public function add_employee_data($firstname, $lastname, $email, $gender, $dob, $home, $city,
    $state, $postcode, $country)
    {
        //name concatenation
        $im_name = $firstname.'_'.$lastname;

        //confirm EMAIL verification
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return 'ERROR_MAIL';
        }

        //SET | INCREMENT EMPLOYEE RECORD ID IN DB
        $query = $this->server->prepare("SELECT recordID FROM employee_record WHERE email = ? ORDER BY recordID DESC LIMIT 1");
        $query->bind_param("s", $email); $query->execute();
        $res = $query->get_result(); $record = $res->fetch_assoc();
        if(empty($record['recordID']))
        {
            $e_data = 1;

        }elseif (!empty($record['recordID']))
        {
            $e_data = $record['recordID'] + 1;
        }
        
        $date = date("Y-m-d H:i:sa");


        $query_E = $this->server->prepare('INSERT INTO employee_record(recordID, firstname, lastname, email, gender,
        dob, home, city, state, postcode, country, date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)');
        $query_E->bind_param('ssssssssssss', $e_data, $firstname, $lastname, $email, $gender, $dob, $home, $city, 
        $state, $postcode, $country, $date);
        $query_E->execute();

        return 'SUCCESS';

    }
}