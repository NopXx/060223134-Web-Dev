<?php

    session_start();
    ob_start();

    $_SESSION['product'][0] = array(
        'id' => 1,
        'name' => 'สตรอเบอร์รี่',
        'price' => 10,
        'quantity' => 100,
        'image' => './img/strawberry.png',
    );
    $_SESSION['product'][1] = array(
        'id' => 2,
        'name' => 'เลมอน',
        'price' => 15,
        'quantity' => 100,
        'image' => './img/lemon.png',
    );
    $_SESSION['product'][2] = array(
        'id' => 3,
        'name' => 'แอปเปิล',
        'price' => 20,
        'quantity' => 100,
        'image' => './img/apple.png',
    );
    $_SESSION['product'][3] = array(
        'id' => 4,
        'name' => 'กล้วย',
        'price' => 10,
        'quantity' => 100,
        'image' => './img/bananas.png',
    );
    $_SESSION['product'][4] = array(
        'id' => 5,
        'name' => 'สัปปะรด',
        'price' => 20,
        'quantity' => 100,
        'image' => './img/pineapple.png',
    );

?>

<meta http-equiv="refresh" content="0; url=work2.php">