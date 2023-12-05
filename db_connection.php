<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    if( $_SERVER['HTTP_HOST'] == "localhost" ){
        $DB_SERVER = 'localhost';
        $DB_USER = 'metrorns_user';
        $DB_PASSWORD = '51c8cdSAEWQ$%Tgfhbf3';
        $DB = 'unifapi_bd';    
    }else{
        $DB_SERVER = 'localhost';
        $DB_USER = 'unifapi_usr';
        $DB_PASSWORD = '51c8cdSAEWQ$%Tgfhbf3';
        $DB = 'unifapi_bd';
    }
    
    $conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $mysqli = new mysqli("localhost", $DB_USER, $DB_PASSWORD, $DB);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        die();
    }
?> 