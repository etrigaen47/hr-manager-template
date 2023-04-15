<?php

require '../b-components/Departments.php';
require '../b-components/server/helpers.php';

//add department
if(isset($_POST['department']))
{
    $name = sanitize($_POST['department']);

    $department = new Departments();
    $result = $department->add_department($name);
    echo $result;
    exit();
}

//verify employee id
if(isset($_POST['verify_eID']))
{
    $e_id = sanitize($_POST['verify_eID']);

    $verify_eID = new Departments();
    $result = $verify_eID->E_ID_checker($e_id);
    echo $result;
    exit();
}

//add employee to department
if(isset($_POST['email']) && isset($_POST['employee_name']))
{
    $email = sanitize($_POST['email']);
    $e_name = sanitize($_POST['employee_name']);

    $add_employee_dept = new Departments();
    $result = $add_employee_dept->assign_department($email, $e_name);
    echo $result;
    exit();
}