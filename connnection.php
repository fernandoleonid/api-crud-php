<?php
    // $servername = "localhost:3306";
    // $username = "root";
    // $password = "";
    // $db = 'aulacrud';

    $servername = "92.249.45.2";
    $username = "u460824796_apicrud";
    $password = "Senai127";
    $db = 'u460824796_apicrud';
    

    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset('utf8');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;