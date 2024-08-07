<?php

session_start();
ob_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['arr']) && !isset($_POST['id'])) {
        $_SESSION['arr'][] = $_POST['arr'];
    } elseif (isset($_POST['id'])) {
        $_SESSION['arr'][$_POST['id']] = $_POST['arr'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        unset($_SESSION['arr'][$_GET['id']]);
    }
}
header('Location: show_detail.php');
