<?php
    require "db.php";

    $sql = 'select * from user_data';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: ". $row["name"]. " - Age: ". $row["age"]. " - Email: ". $row["email"]. "<br>";
    }

?>