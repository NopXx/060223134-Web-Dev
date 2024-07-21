<!doctype html>
<html lang="en">

<head>
    <title>calculator multiplication</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">

        <div class="row mt-5" style="min-width: 1200px;">
            <!-- check if request method is post -->
            <div class="col-md-<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo '6';
                                else echo '12'; ?>">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h2 class="card-title">Calculator Multiplication</h2>
                        <hr>
                        <form method="POST">

                            <div class="mb-3">
                                <label for="number1">Number 1:</label>
                                <!-- create input type number -->
                                <input type="number" class="form-control" name="number1" id="number1" required />
                            </div>

                            <div class="mb-3">
                                <label for="operators">Operators</label>
                                <!-- create select operator -->
                                <select class="form-select" name="operator">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="number2">Number 2:</label>
                                <!-- create input type number -->
                                <input type="number" class="form-control" name="number2" id="number2" required />
                            </div>

                            <button type="submit" class="btn btn-primary">Calculate</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- check if request method is post -->
                <div class="card shadow" style="display: <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo 'block';
                                                            else echo 'none'; ?>;">
                    <div class="card-body p-4">
                        <h2 class="card-title">Result</h2>
                        <?php
                        // check if request method is post
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            // add request to variables
                            $number1 = $_POST['number1'];
                            $operator = $_POST['operator'];
                            $number2 = $_POST['number2'];
                            $detail = '';

                            // check $operator using switch case
                            switch ($operator) {
                                case '+':
                                    // if operator is +
                                    $result = $number1 + $number2;
                                    // บวก $number1 กับ $number2 แล้วเก็บไว้ $result
                                    $detail = $number1 . ' + ' . $number2 . ' = ' . $result;
                                    // แสดง $number1 + $number2 = $result แล้วเก็บไว้ $detail
                                    break;
                                    // ออกจาก switch case
                                case '-':
                                    $result = $number1 - $number2;
                                    $detail = $number1 . ' - ' . $number2 . ' = ' . $result;
                                    break;
                                case '*':
                                    $result = $number1 * $number2;
                                    $detail = $number1 . ' * ' . $number2 . ' = ' . $result;
                                    break;
                                case '/':
                                    // check number2 is 0
                                    if ($number2 == 0) {
                                        $detail = "Error: Division by zero is not allowed.";
                                        // แสดง error message แล้วเก็บไว้ $detail
                                        break;
                                    }
                                    $result = $number1 / $number2;
                                    $detail = $number1 . ' / ' . $number2 . ' = ' . $result;
                                    break;
                                default:
                                    $detail = "Error: Invalid operator.";
                                    break;
                            }
                        }
                        ?>

                        <div class="mb-3">
                            <hr>
                            <!-- แสดง $detail -->
                            <h5><?= $detail; ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <!-- check if request method is post -->
                <div class="card shadow" style="display: <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo 'block';
                                                            else echo 'none'; ?>;">
                    <div class="card-body p-4">
                        <h2 class="card-title">Multiplication Table 1 to 12</h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <?php
                                    // check if request method is post
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        // loop for 1 to 12
                                        for ($i = 1; $i <= 12; $i++) {
                                            // create tag td
                                            echo '<td>';
                                            // show $i
                                            echo $i;
                                            echo '<br><hr>';
                                            // loop for 1 to 12
                                            for ($number = 1; $number <= 12; $number++) {
                                    ?>
                                                <!-- show message $i * $number = ($i * $number) -->
                                                <h5><?= $i . ' * ' . $number . ' = ' . ($i * $number)  ?></h5>
                                    <?php
                                            }
                                            // close tag td
                                            echo '</td>';
                                        }
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>