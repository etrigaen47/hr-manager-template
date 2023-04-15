<?php

require_once '../b-components/Authentication.php';
require_once '../b-components/server/helpers.php';

//login
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);

    $login = new Authentication();
    $result = $login->Auth_In($username, $password);
    echo $result;
    exit();
}

//registration
if(isset($_POST['fullname']) && isset($_POST['userID']))
{
    $fullname = sanitize($_POST['fullname']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    $workID = sanitize($_POST['userID']);
    $password = sanitize($_POST['password']);

    $register = new Authentication();
    $result = $register->AuthRegister($fullname, $email, $phone, $workID, $password);
    echo $result;
    exit();
}

//logout
if(isset($_POST['user_signout']))
{
    $userID = sanitize($_POST['userID']);

    $logout = new Authentication();
    $result = $logout->AuthLogout($userID);
    echo $result;
    exit();
}
?>