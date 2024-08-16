<?php
    session_start();
    ob_start();

    if (isset($_GET['cartId'])) {
        unset($_SESSION['cart'][$_GET['cartId']]);
        header('Location: cart.php');
    }

    // session_destroy();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cart</title>
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
                        <h5 class="card-title mb-4">Cart</h5>
                    </div>
                    <div class="col-auto ms-auto">
                        <a href="work2.php" class="btn btn-outline-success"><i class='bx bx-home-alt-2' ></i></a>
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
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!isset($_SESSION['cart'])) {
                        echo "<tr><td colspan='5' align='center'>No product</td></tr>";
                    } else {
                        $total = 0;
                        foreach ($_SESSION['cart'] as $key => $item) {
                            $total += $item['price'] * $item['qty'];
                    ?>
                            <tr>
                                <td><img class="img-thumbnail" src="<?= $item['image'] ?>" alt="Image" width="75px;"></td>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td><?= $item['qty'] ?></td>
                                <td><?= $item['price'] * $item['qty'] ?></td>
                                <td><a class="btn btn-outline-danger" href="cart.php?cartId=<?=$key;?>" role="button"><i class='bx bx-trash-alt'></i></a></td>
                            </tr>
                    <?php }
                    } ?>
                    <tr>
                        <td colspan="7" align="center">Total Price: <?=@$total;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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