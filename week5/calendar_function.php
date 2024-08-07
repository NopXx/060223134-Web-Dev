<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<style>
    td:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }
</style>

<body>
    <div class="container-sm">
    <?php

function displayCalendar($month = null, $year = null) {
    
    // สร้างตัวแปร month เพื่อรับ parameters month
    $month = $month ?? date('n'); // check variable month is null if null return month now
    // สร้างตัวแปร year เพื่อรับ parameters year
    $year = $year?? date('Y'); // check variable year is null if null return year now

    // หาวันแรกของเดือน
    $firstDay = date('w', mktime(0, 0, 0, $month, 1, $year));

    // หาจำนวนวันทั้งหมดในเดือน
    $totalDays = date('t', mktime(0, 0, 0, $month, 1, $year));

    // หาชื่อเดือน
    $monthName = date('F', mktime(0, 0, 0, $month, 1, $year));


    echo "<h2>$monthName $year</h2>";
    // แสดงชื่อเดือน
    echo "<table class='table'>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            <tr>";

    // วนลูปเพื่อสร้างช่องว่างก่อนวันที่ 1 ของเดือน
    for ($i = 0; $i < $firstDay; $i++) {
        echo "<td></td>";
    }

    // วนลูปเพื่อแสดงวันในเดือน
for ($day = 1; $day <= $totalDays; $day++) {
    // ตรวจสอบว่าวันนี้เป็นวันที่ปัจจุบันหรือไม่ ถ้าใช่ให้ไฮไลท์
    $highlight = ($day == date('j') && $month == date('n') && $year == date('Y')) ? " style='background-color: #26a0fc;'" : "";
    echo "<td $highlight>$day</td>";
    
    // ถ้าวันนี้เป็นวันสุดท้ายของสัปดาห์ (วันเสาร์) ให้ปิดแถวปัจจุบันและเริ่มแถวใหม่
    if (($day + $firstDay) % 7 == 0) {
        echo "</tr><tr>";
    }
}
    echo "</tr>
        </table>";
}

// กำหนดปีปัจจุบัน
$currentYear = date('Y');

// วนลูปเพื่อแสดงปฏิทินทั้ง 12 เดือน
for ($month = 1; $month <= 12; $month++) {
    displayCalendar($month, $currentYear);
    echo "<br>";
}

?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>