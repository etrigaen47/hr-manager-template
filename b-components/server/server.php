<?php
require '../b-components/server/config.php';

$server = new Mysqli(HOST, USER, PASS, DATABASE);

if(mysqli_connect_errno()){
    echo strtoupper("<h1>database connection failed</h1><h2>".mysqli_connect_error()."</h2>");
    die();
}


require_once 'autoload_result.php';
//require_once '../transport/helpers.php';
//require $_SERVER['DOCUMENT_ROOT'].'/bintalyaschool/transport/uri_constants.php';