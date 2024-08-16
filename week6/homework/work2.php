<?php

session_start();
ob_start();

if (isset($_SESSION['cart'])) {
    $cart_count = count($_SESSION['cart']);
} else {
    $cart_count = 0;
}

if (isset($_GET['proId'])) {
    $proId = (int)$_GET['proId'] - 1;
    $product = $_SESSION['product'][$proId];
    
    if (isset($_SESSION['product'][$proId]) && is_array($_SESSION['product'][$proId])) {
        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $IsInCart = false;

        foreach ($_SESSION['cart'] as $key => $cart) {
            if (isset($cart['id']) && $cart['id'] == $product['id']) {
                $_SESSION['cart'][$key]['qty'] += 1;
                $IsInCart = true;
                break;
            }
        }

        if (!$IsInCart) {
            $_SESSION['cart'][] = array(
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'qty' => 1,
                'image' => $product['image'],
            );
        }
    } else {
        echo "Error: Product not found.";
    }
    
    header('Location: work2.php');
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Work 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container-sm">
        <div class="card mt-5 p-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-title mb-4">Product</h5>
                    </div>
                    <div class="col-auto ms-auto">
                        <a href="init_product.php" class="btn btn-outline-info">init product</a>
                        <a href="cart.php" class="btn btn-outline-success position-relative">
                            <i class='bx bx-cart-alt'></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                <?= $cart_count; ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Picture</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Cart</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!isset($_SESSION['product'])) {
                        echo "<tr><td colspan='5' align='center'>No product</td></tr>";
                    } else {
                        foreach ($_SESSION['product'] as $item) {
                    ?>
                            <tr>
                                <td><img class="img-thumbnail" src="<?= $item['image'] ?>" alt="Image" width="75px;"></td>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td><a class="btn btn-outline-success" href="work2.php?proId=<?= $item['id'] ?>" role="button"><i class='bx bx-cart-add'></i></a></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>