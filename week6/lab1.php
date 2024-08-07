<?php

    function test_cookie() {
        if (isset($_COOKIE['cookie_name'])) {
            echo "cook = {$_COOKIE['cookie_name']}<br>";
        } else {
            echo "cookie not set !<br>";
        }
    }
    ?>
    <pre><?php print_r($_COOKIE) ?></pre>
    <?php
    setcookie("cookie_name","Nopparat", time() + 120, "/");
    test_cookie();
    setcookie("cookie_name","Nopparat", time() - 120, "/");
    // unset($_COOKIE['cookie_name']);
    test_cookie();