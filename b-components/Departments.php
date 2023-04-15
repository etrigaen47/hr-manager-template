<?php

class Departments{

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

    public function add_department($name)
    {
        //SET | INCREMENT EMPLOYEE RECORD ID IN DB
        $query = $this->server->prepare("SELECT recordID FROM departments ORDER BY recordID DESC LIMIT 1");
        $query->execute();
        $res = $query->get_result(); $record = $res->fetch_assoc();
        if(empty($record['recordID']))
        {
            $d_data = 1;

        }elseif (!empty($record['recordID']))
        {
            $d_data = $record['recordID'] + 1;
        }
        
        $date = date("Y-m-d H:i:sa");


        $query_E = $this->server->prepare('INSERT INTO departments(recordID, name, date) VALUES(?,?,?)');
        $query_E->bind_param('sss', $d_data, $name, $date);
        $query_E->execute();

        return 'SUCCESS';
    }

    //verify employee id
    public function E_ID_checker($eID)
    {
        $query = $this->server->prepare('SELECT firstname, lastname FROM employee_record WHERE email = ?');
        $query->bind_param('s', $eID); $query->execute(); $result = $query->get_result();
        if($result->num_rows < 1)
        {
            return 'NO_RECORD';
        }else{
            $data = $result->fetch_assoc();
            $fullname = $data['firstname'].' '.$data['lastname'];

            return $fullname;
        }
    }

    public function assign_department($email, $e_name)
    {

    }
}