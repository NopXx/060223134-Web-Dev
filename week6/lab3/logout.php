<?php

    setcookie('yourusername', '', time() - 3600);
    unset($_COOKIE['yourusername']);
    setcookie('yourpassword', '', time() - 3600);
    unset($_COOKIE['yourpassword']);
    echo "logout success<br>";
    echo '<meta http-equiv="refresh" content="2; url=index.php">';