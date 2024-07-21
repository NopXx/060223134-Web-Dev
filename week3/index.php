<?php
include "cal_salary.php";
// include file cal_salary.php

// check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    // เก็บค่าจาก method post name fname
    $hours = $_POST['hours'];
    // เก็บค่าจาก method post name hours
    $result = salary($fname, $hours);
    // เรียก function salary โดยส่งพารามิเตอร์ fname, hours
}
?>

<!-- สร้าง html, bootstrap5 -->
<!doctype html>
<html lang="en">

<head>
    <title>calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="card mt-5">
                <div class="card-body">
                    <!-- สร้าง row , column -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Calculator Salary</h3>
                            <!-- create form method post -->
                            <form action="" method="post">

                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <!-- create tag input type text -->
                                    <input type="text" class="form-control" name="fname" required />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Hours</label>
                                    <!-- create tag input type number -->
                                    <input type="number" name="hours" class="form-control" required />
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h3>Result</h3>
                            <!-- check $result is not null -->
                            <?php if (isset($result)) { ?>
                                <div class="table-responsive">
                                    <table class="table table-border">
                                        <thead>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <!-- แสดงข้อมูลในอาร์เรย์ $result key Name -->
                                                    <?= $result['Name'] ?>
                                                    <!-- แสดงข้อมูลในอาร์เรย์ $result key Hours -->
                                                    Working time : <?= $result['Hours'] ?>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- loop ข้อมูลในอาร์เรย์ $result key Details ไปเก็บไว้ในตัวแปร $detail -->
                                            <?php foreach ($result['Details'] as $detail) {  ?>
                                                <tr>
                                                    <!-- แสดงข้อมูลในอาร์เรย์ $detail ตำแหน่งที่ 0 -->
                                                    <td><?= $detail[0] ?></td>
                                                    <!-- แสดงข้อมูลในอาร์เรย์ $detail ตำแหน่งที่ 1 -->
                                                    <td><?= $detail[1] ?></td>
                                                    <!-- แสดงข้อมูลในอาร์เรย์ $detail ตำแหน่งที่ 2 -->
                                                    <td><?= $detail[2] ?></td>
                                                    <!-- แสดงข้อมูลในอาร์เรย์ $detail ตำแหน่งที่ 3 -->
                                                    <td><?= $detail[3] ?></td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td></td>
                                                <!-- แสดงข้อมูลในอาร์เรย์ $result key Hours -->
                                                <td><?= $result['Hours'] ?> Hour</td>
                                                <td></td>
                                                <!-- แสดงข้อมูลในอาร์เรย์ $result key Total -->
                                                <td>Total : <?= $result['Total'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>