<?php

    $user = $_COOKIE['yourusername'];
    $pass = $_COOKIE['yourpassword'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $user && $password == $pass) {
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
        } else {
            echo "Invalid username or password";
        }
    }