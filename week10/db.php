<?php

    $host = 'localhost';
    $user = 'nopparat';
    $pw = '6606021421012';
    $db = 'db_6606021421012';

    try {
        $conn = new PDO(
            "mysql:host=$host;
            dbname=$db;
            charset=utf8",
            $user, $pw);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
    }

?>