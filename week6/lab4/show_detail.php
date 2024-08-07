<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    a {
        text-decoration: none;
    }
</style>

<body>
    <pre><?php print_r($_SESSION) ?></pre>
    <h1>Contact list</h1>
    <?php
    if (isset($_GET['id'])) {
        echo '<form method="post" action="process.php">';
        echo '<input type="hidden" name="id" value="'. $_GET['id']. '">';
        echo '<br>update Data :: <input type="text" name="arr" value="'. $_SESSION['arr'][$_GET['id']]. '"> <input type="submit" value="Update"> | <a href="show_detail.php">Cancel</a>';
        echo '</form>';
    } else {
        echo '<form method="post" action="process.php">';
        echo '<br>add Data :: <input type="text" name="arr" required> <input type="submit" value="Add">';
        echo '</form>';
    }
    if (isset($_SESSION['arr'])) {
        echo '<ol>';
        foreach ($_SESSION['arr'] as $key => $item) {
            echo '<li>' . $item . ' | <a href="show_detail.php?id=' . $key . '">update</a> | <a href="process.php?id=' . $key . '&type=del">del</a></li>';
        }
        echo '</ol>';
        echo '<hr><a href="index.php">init</a> | <a href="page2.php">unset arrData</a> | ';
    } else {
        echo '<br><br>';
        echo 'No data found.';
        echo '<hr><a href="index.php">init</a> | ';
    }
    ?>
    <a href="close.php">destory session</a>
</body>

</html>