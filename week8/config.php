<?php

    $host = "127.0.0.1";
    $user = "root";
    $pw = "";
    $db = "mydb";

    // Create connection
    $conn = new mysqli($host, $user, $pw, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }


?>