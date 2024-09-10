<?php
require_once "config.php";

// select data
function selectUsers($conn)
{
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] .
                " - Name: " . $row["name"] .
                " - Email: " . $row["email"] .
                " - Age: " . $row["age"] .
                " - Tel: " . $row["tel"] . "<br>";
        }
    } else {
        echo "No results found";
    }
}
// Update data
function updateUser($conn, $age, $tel, $id)
{

    $sql = "UPDATE users SET age = '$age', tel = '$tel' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    echo "<br>";
}

// Delete data
function deleteUser($conn, $id)
{
    $sql = "DELETE FROM users WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $affected_rows = $conn->affected_rows;
        if ($affected_rows > 0) {
            echo "{$affected_rows} record(s) deleted successfully.";
        } else {
            echo "No record found";
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    echo "<br>";
}



// Select data
selectUsers($conn);

// update data
updateUser($conn, 15, 1234555, 6);

// select data
selectUsers($conn);

$conn->close();
