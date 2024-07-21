<?php

// ประกาศฟังก์ชัน รับพารามิเตอร์สองตัวคือ name, hours
function salary($name, $hours)
{
    $result = [];
    // สร้างตัวแปรอาร์เรย์
    $total = 0;
    // สร้างตัวแปร total เพื่อเก็บเงินเดือนรวม
    $details = [];
    // สร้างตัวแปรอาร์เรย์เพื่อเก็บรายละเอียดการคำนวณเงินเดือน

    // ตรวจสอบ hours > 24
    if ($hours > 24) {
        $details[] = ["Working overtime", '', '', ''];
        // เพิ่มรายละเอียดเข้าในอาร์เรย์

        $result = [
            "Name" => $name,
            "Hours" => $hours,
            "Total" => $total,
            "Details" => $details
        ];
        // เพิ่มข้อมูลเข้าในอาร์เรย์

        return $result;
        // คืนค่าอาร์เรย์ $result
    }

    $first_10_hours = min($hours, 10);
    // หาจำนวนชั่วโมงที่ทำงานในช่วง 10 ชั่วโมงแรก โดยหาค่าที่น้อยที่สุดระหว่าง $hours และ 10
    $total += $first_10_hours * 100;
    // เพิ่มเงินเดือนสำหรับ 10 ชั่วโมงแรก
    $details[] = ["First 10 Hr.", $first_10_hours, 100, $first_10_hours * 100];
    // เพิ่มรายละเอียดเข้าในอาร์เรย์

    // ตรวจสอบ hours > 10
    if ($hours > 10) {
        $exceed_10_hours = min($hours - 10, 10);
        // หาจำนวนชั่วโมงที่หลังจาก 10 ชั่วโมงแรก โดยหาค่าที่น้อยที่สุดระหว่าง $hours - 10 และ 10
        $total += $exceed_10_hours * 200;
        // เพิ่มเงินเดือนสำหรับชั่วโมงที่เกินจาก 10 ชั่วโมง
        $details[] = ["Exceeds 10 Hr.", $exceed_10_hours, 200, $exceed_10_hours * 200];
        // เพิ่มรายละเอียดเข้าในอาร์เรย์
    }

    // ตรวจสอบ hours > 20
    if ($hours > 20) {
        $exceed_20_hours = $hours - 20;
        // หาจำนวนชั่วโมงที่หลังจาก 20 ชั่วโมงแรก โดยหาค่าระหว่าง $hours - 20
        $total += $exceed_20_hours * 300;
        // เพิ่มเงินเดือนสำหรับชั่วโมงที่เกินจาก 20 ชั่วโมง
        $details[] = ["Exceeds 20 Hr.", $exceed_20_hours, 300, $exceed_20_hours * 300];
        // เพิ่มรายละเอียดเข้าในอาร์เรย์
    }



    $result = [
        "Name" => $name,
        "Hours" => $hours,
        "Total" => $total,
        "Details" => $details
    ];
    // เพิ่มข้อมูลเข้าในอาร์เรย์

    return $result;
    // คืนค่าอาร์เรย์ $result
}
