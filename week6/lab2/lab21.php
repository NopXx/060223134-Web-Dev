<?php

    $month = time() + 2592000;
    $time_now = date("F jS, Y - g:i:s a");
    
    if (isset($_COOKIE['LastVisit'])) {
        echo "Welcome back!<br>";
        $last = $_COOKIE['LastVisit'];
        echo "Your last visit was $last<br>";
    } else {
        setcookie('LastVisit', $time_now, $month);
        echo "Welcome to our site!<br>";
    }
    echo "Hi....<br>";
    echo "Today is $time_now<br>";


?>
<a href="lab22.php">clear cookie</a>
<pre><?php print_r($_COOKIE) ?></pre>