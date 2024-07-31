<?php
// Get the current month and year, or use the provided month and year from GET parameters
$month = isset($_GET['month']) ? (int)$_GET['month'] : date('n');
$year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');

// Calculate the first and last day of the month
$firstDay = mktime(0, 0, 0, $month, 1, $year);
$lastDay = mktime(0, 0, 0, $month + 1, 0, $year); // 0th day of next month

// Calculate the weekday of the first day (0 = Sunday, 1 = Monday, etc.)
$startDay = date('w', $firstDay);
$totalDays = date('t', $firstDay); // Total days in the month

// Get the name of the month
$monthName = date('F', $firstDay);

// Determine the next month and year
$nextMonth = $month == 12 ? 1 : $month + 1;
$nextYear = $month == 12 ? $year + 1 : $year;

// Determine the previous month and year
$prevMonth = $month == 1 ? 12 : $month - 1;
$prevYear = $month == 1 ? $year - 1 : $year;
?>

<!doctype html>
<html lang="en">

<head>
    <title>Calendar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        /* Style for cells with id 'per' */
        td#per {
            background-color: #c5c5c5;
            color: #343a40;
            border: 1px solid #a7a7a7;
        }

        /* Style for table cells */
        td {
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
        }

        /* Style for table cells on hover */
        td:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h1>Week 4 Calendar</h1>
        </div>
        <div class="row mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 id="today"></h4>
                        </div>
                        <div class="col-auto ms-auto">
                            <a href="?" class="btn btn-outline-primary">Today</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4><?php echo $monthName . ' ' . $year; ?></h4>
                        </div>
                        <div class="col-auto ms-auto">
                            <a href="?month=<?php echo $prevMonth; ?>&year=<?php echo $prevYear; ?>" class="btn btn-outline-warning">Previous Month</a>
                            <a href="?month=<?php echo $nextMonth; ?>&year=<?php echo $nextYear; ?>" class="btn btn-outline-primary">Next Month</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-3">
        </div>
        <div class="row">
            <div class="card shadow">
                <div class="card-body">
                    <!-- Create table for the month -->
                    <table class="table table-bordered">
                        <thead>
                            <!-- Row header with day names -->
                            <tr align="center">
                                <?php
                                // Day names
                                $daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                                foreach ($daysOfWeek as $day) {
                                    echo "<th>$day</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                for ($i = 0; $i < $startDay; $i++) {
                                    echo "<td id='per'></td>";
                                }

                                $currentDay = 1;

                                while ($currentDay <= $totalDays) {
                                    // Highlight the current day
                                    if ($currentDay == date('j') && $month == date('n') && $year == date('Y')) {
                                        echo "<td style='background-color:#26a0fc; color: #fff;'>$currentDay</td>";
                                    } else {
                                        echo "<td>$currentDay</td>";
                                    }

                                    // Move to the next day and check for new row
                                    if (($currentDay + $startDay) % 7 == 0) {
                                        echo "</tr><tr>"; // Start a new row if it's the end of a week
                                    }

                                    $currentDay++;
                                }

                                // Fill in remaining blank cells if needed
                                if (($currentDay + $startDay) % 7 != 0) {
                                    $remainingDays = 7 - (($currentDay + $startDay) % 7);
                                    for ($i = 0; $i <= $remainingDays; $i++) {
                                        echo "<td id='per'></td>";
                                    }
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>

    <script>
        // get today using monent js format Sunday 21 july 2024
        const today = moment().format('ddd DD MMMM YYYY');

        // get element by id today and innerText
        document.getElementById('today').innerText = today;
    </script>
</body>

</html>