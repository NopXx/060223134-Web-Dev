<?php

require_once "../config.php";

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $sql = "INSERT INTO users (name, email, age, tel) VALUES ('$name', '', 0, '')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
} else {
    die("Invalid Input Name");
}

if (isset($conn)) {
    $conn->close();
}

include "footer.html";


?>