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