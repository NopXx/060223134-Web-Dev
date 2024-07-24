<?php

    $products = ['Laptop', 'Smartphone', 'Headphones'];

    echo 'Second product: ' . $products[1] . '<br>';

    $products = ['Tablet'];
    array_unshift($products, 'Camera');
    print_r($products);
    echo '<br>';

    $products[2] = "Smartwatch";
    print_r($products);
    echo '<br>';

    unset($products[0]);
    print_r($products);
    echo '<br>';

    $numProducts = count($products);
    echo 'Number of products: $numProducts <br>';

    sort($products);
    print_r($products);
    echo '<br>';

    $index = array_search('Headphones', $products);
    if ($index !== false) {
        echo 'Headphones found at index: '. $index. '<br>';
    }
    echo '<br>';

    $score = [1250, 1080, 950];

    $highScore = max($score);
    echo 'Highest score: '. $highScore. '<br>';

    $images = ['image1.jpg', 'image2.png', 'image3.gif'];

    foreach ($images as $image) {
        echo '<img src="'. $image. '" alt="Image" style="width: 100;"><br>';
    }

    echo '<br>';

    $product = [
        'name' => 'Laptop',
        'price' => 999,
        'desciption' => 'Powerful laptop for everyday use.'
    ];

    echo 'Product Nanme: ' . $product['name']. '<br>';

    $product['price'] = 899;
    echo 'New Price: '. $product['price']. '<br>';

    $product['brand'] = 'Acme';
    echo 'Added Brand: '. $product['brand']. '<br>';

    unset($product['desciption']);
    print_r($product);
    echo '<br>';

    $config = [
        'db_host' => 'localhost',
        'db_user' => 'root',
        'db_pass' => 'password',
    ];

    echo '<br>';

    $dbHost = $config['db_host'];
    echo 'Database Host: '. $dbHost. '<br>';

?>