<?php

    require_once "../config.php";

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $sql = "UPDATE users SET name='$name' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: ". $conn->error;
        }
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id=$id";
        $result = $conn->query($sql);
        if ($result) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: ". $conn->error;
        }
    }

    $result = $conn->query('select * from users');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <h4>View All User</h4>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php 
            foreach ($result as $item) {
        ?>
        <tr>
            <td>
                <?= $item['id'] ?>
            </td>
            <td>
                <?= $item['name']; ?>
            </td>
            <td>
                <form action="view.php" method="post">
                    <input type="hidden" name="id" value="<?=$item['id'];?>">
                    <input type="text" name="name" id="" value="<?=$item['name'];?>">
                    <input type="submit" value="Update">
                </form>
            </td>
            <td>
                <a href="view.php?id=<?= $item['id']?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php
        $conn->close();
        include "footer.html";
    ?>
</body>
</html>