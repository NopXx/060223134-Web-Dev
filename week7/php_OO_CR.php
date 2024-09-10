<?php

    // database config
    $server = "127.0.0.1";
    $user = "root";
    $pw = "";
    $db = "mydb";

    // connect to the database
    $conn = new mysqli($server, $user, $pw, $db);

    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    // create table if not exists
    $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL
        )";

    if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: ". $conn->error;
    }

    echo "<br>";

    // insert sample data
    $sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john.doe@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }

    echo "<br>";

    // select all data
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    
    } else {
        echo "0 results";
    }

    $conn->close();

?>