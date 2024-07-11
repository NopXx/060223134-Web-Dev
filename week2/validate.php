<?php

$errors = [];

// ตรวจสอบว่าฟอร์มถูกส่งมา
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับค่าข้อมูลจากฟอร์ม
    $fullname = $_POST['fullname'];
    $student_number = $_POST['student_number'];
    $email = $_POST['email'];

    // ตรวจสอบชื่อเต็ม
    if (empty($fullname)) {
        $errors[] = "กรุณากรอกชื่อเต็ม";
    }

    // ตรวจสอบรหัสนักเรียน
    if (empty($student_number)) {
        $errors[] = "กรุณากรอกรหัสนักเรียน";
    } elseif (!is_numeric($student_number) || strlen($student_number) != 13) {
        $errors[] = "รหัสนักเรียนต้องมี 13 หลัก";
    }

    // ตรวจสอบอีเมล
    if (empty($email)) {
        $errors[] = "กรุณากรอกอีเมล";
    }

    // ตรวจสอบข้อผิดพลาด
    if (empty($errors)) {
        // ไม่มีข้อผิดพลาด
        echo "ส่งฟอร์มสำเร็จ!";
    } else {
        // แสดงข้อผิดพลาด
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
} else {
    echo "<p style='color: red;'>วิธีการขอข้อมูลไม่ถูกต้อง</p>";
}

?>
