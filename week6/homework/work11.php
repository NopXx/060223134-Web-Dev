<?php

    $month = time() + 2592000;
    $time_now = date("F jS, Y - g:i:s a");
    $count = 1;
    
    if (isset($_COOKIE['LastVisit']) && isset($_COOKIE['Count'])) {
        $last = $_COOKIE['LastVisit'];
        $last_count = $_COOKIE['Count'];
        setcookie('Count', (int)$last_count + 1, $month);
    } else {
        setcookie('Count', $count, $month);
        setcookie('LastVisit', $time_now, $month);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work 1</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <center>
            <h1><?= $time_now ?></h1>
            <h4>View Count : <?= @$last_count + 1 ?></h4>
            <a href="work12.php"><h5>clear cookie</h5></a>
        </center>
    </div>
</body>
</html>