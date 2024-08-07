<?php

    session_start();
    ob_start();
    session_destroy();
    header('Location: show_detail.php');