<?php

require_once "config.php";

// Create table (if it doesn't exist)
$sql = "CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  age INT(3),
  tel VARCHAR(15)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully (if it didn't exist)";
} else {
    echo "Error creating table: " . $conn->error;
}
echo "<br>";

// Insert data
$sql = "INSERT INTO users (name, email, age, tel) VALUES ('John Doe', 'john@example.com', 12, '1234567890')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br>";

// Select data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "No results found";
}

$result->free();
$conn->close();
?>
