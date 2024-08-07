<?php

    session_start();
    ob_start();
    unset($_SESSION['arr']);
    header('Location: show_detail.php');