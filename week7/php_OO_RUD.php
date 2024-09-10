<?php

// database config
$server = "127.0.0.1";
$user = "root";
$pw = "";
$db = "mydb";

// connect to the database
$conn = new mysqli($server, $user, $pw, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// select data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . 
        " - Email: " . $row["email"] . " - Age: " . $row['age'] . 
        " - Tel: " . $row['tel'] . "<br>";
    }
} else {
    echo "No result found";
}

echo "<br>";

// Update data
$sql = "update users set age = 25, tel = '0912345678' where id = 2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ". $conn->error;
}

echo "<br>";

// select data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . 
        " - Email: " . $row["email"] . " - Age: " . $row['age'] . 
        " - Tel: " . $row['tel'] . "<br>";
    }
} else {
    echo "No result found";
}

echo "<br>";

// Delete data
$sql = "DELETE FROM users WHERE id = 9";

if ($conn->query($sql) === TRUE) {
    $affected_rows = $conn->affected_rows;
    if ($affected_rows > 0) {
        echo "{$affected_rows} record(s) deleted successfully";
    } else {
        echo "No record found to delete";
    }
} else {
    echo "Error deleting record: ". $conn->error;
}

echo "<br>";

// select data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . 
        " - Email: " . $row["email"] . " - Age: " . $row['age'] . 
        " - Tel: " . $row['tel'] . "<br>";
    }
} else {
    echo "No result found";
}

$conn->close();