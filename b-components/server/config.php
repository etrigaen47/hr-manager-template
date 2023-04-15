<?php

session_start();
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Africa/Lagos');
ini_set("display_errors", 1);
//ini_set(' allow_url_include', 1);

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'hr_app_template');

$get_url = $_SERVER['REMOTE_ADDR'];
$uri = $_SERVER['REQUEST_URI'];


define('HOME_PATH', 'template');

//require $_SERVER['DOCUMENT_ROOT'].'/'.HOME_PATH.'/controllers/server.php';
require $_SERVER['DOCUMENT_ROOT'].'/'.HOME_PATH.'/transport/uri_constants.php';

