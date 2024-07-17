<?php

echo '<h3>Using \"if-else\" statement</h3>';

$action = "logout";

if ($action == "login") {
    echo "Processing login...<br>";
} else if ($action == "register") {
    echo "Processing registration...<br>";
} else if ($action == "logout") {
    echo "Loging out...<br>";
} else {
    echo "Invalid action<br>";
}

echo '<br>';

echo '<h3>Using switch-case statement</h3>';

switch ($action) {
    case "login":
        echo "Processing login...<br>";
        break;
    case "register":
        echo "Processing registration...<br>";
        break;
    case "logout":
        echo "Loging out...<br>";
        break;
    default:
        echo "Invalid action<br>";
}

$a = true;
$b = false;
$c = 150;

echo "<h3>Using if-else (Ideal for complex Logic):</h3>";

if ($a && $b) {
    $discont = 0.20;
} elseif ($a) {
    $discont = 0.10;
} elseif ($c > 100) {
    $discont = 0.05;
} else {
    $discont = 0;
}

$finalPrice = $c - ($c * $discont);
echo "Final price: \$ " . number_format($finalPrice, 2) . "<br>";
