<?php

require '../b-components/Employees.php';
require '../b-components/server/helpers.php';

//add employee data
if(isset($_POST['firstname']) && isset($_POST['home']))
{
    $firstname = sanitize($_POST['firstname']); $lastname = sanitize($_POST['lastname']);
    $email = sanitize($_POST['email']); $gender = sanitize($_POST['gender']); 
    $dob = sanitize($_POST['dob']); $home = sanitize($_POST['home']); 
    $city = sanitize($_POST['city']); $state = sanitize($_POST['state']); 
    $postcode = sanitize($_POST['postcode']); $country = sanitize($_POST['country']); 
    //image
    // $profileImage = $_FILES["p_image"]["name"]; $piType = $_FILES['p_image']["type"]; 
    // $pi_TMPName = $_FILES['p_image']["tmp_name"]; $pi_Size = $_FILES['p_image']["size"];

    $employee = new Employees();
    $result = $employee->add_employee_data($firstname, $lastname, $email, $gender, $dob, $home, $city,
    $state, $postcode, $country);
    echo $result;
    exit();
}