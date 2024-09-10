<?php
require_once "config.php";

// Create table
function createTable($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS pwd_dt (
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50),
        password VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}

// Insert user
function insertUser($conn, $username, $password) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO pwd_dt (username, password) VALUES ('$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Select users
function selectUsers($conn) {
    $sql = "SELECT id, username, created_at, updated_at FROM pwd_dt";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . 
                 " - Username: " . $row["username"] . 
                 " - Created At: " . $row["created_at"] . 
                 " - Updated At: " . $row["updated_at"] . "<br>";
        }
    } else {
        echo "No results found<br>";
    }
    $result->free();
}

// Update user
function updateUser($conn, $id, $username, $password = null) {
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE pwd_dt SET username = '$username', 
        password = '$hashed_password' WHERE id = $id";
    } else {
        $sql = "UPDATE pwd_dt SET username = '$username' WHERE id = $id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }
}

// Delete user
function deleteUser($conn, $id) {
    $sql = "DELETE FROM users WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $affected_rows = $conn->affected_rows;
        if ($affected_rows > 0) {
            echo "{$affected_rows} record(s) deleted successfully.<br>";
        } else {
            echo "No record found<br>";
        }
    } else {
        echo "Error deleting record: " . $conn->error . "<br>";
    }
}

// Execute functions
createTable($conn);

$name = "a";
$password = "a";
$id = 1;
$update = true;
// Insert data
if (!$update){insertUser($conn, $name, $password);}

// Select data
selectUsers($conn);

// Update data
if($update){updateUser($conn, $id, $name, $password);}

// Select data again to show updates
selectUsers($conn);

// Delete data
deleteUser($conn, 9);

// Select data again to show deletions
selectUsers($conn);

mysqli_close($conn);

?>
