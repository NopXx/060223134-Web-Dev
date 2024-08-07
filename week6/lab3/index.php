<?php

    if (isset($_COOKIE['yourusername']) && $_COOKIE['yourpassword']) {
        echo "Had Cookie <br> username : {$_COOKIE['yourusername']}<br>password : {$_COOKIE['yourpassword']}";
        echo '<br><a href="logout.php">Logout</a>';
    } else {
        echo '<meta http-equiv="refresh" content="0; url=login.html">';
    }

?>