<?php

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
} else {
    die("Invalid Input Name");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Data</title>
</head>
<body>
    <p><strong>Name: </strong> <?=$name; ?> </p>
    <form action="insert.php" method="post">
        <input type="hidden" name="name" value="<?= $name; ?>">
        <input type="submit" value="Confirm">
        <button type="button" onclick="window.history.back()">Go Back</button>
    </form>
</body>
</html>