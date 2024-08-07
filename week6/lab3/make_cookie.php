<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    setcookie('yourusername', $username, time() + 1000);
    setcookie('yourpassword', $password, time() + 1000);

?>

<meta http-equiv="refresh" content="0; url=login.html">