<?php

// Get Current Time

echo "<h3>Date/Time Functions</h3>";
// date_default_timezone_set('Asia/Bangkok');
echo 'My time zone is ' . date_default_timezone_get() . '<br>';
echo date("Y-m-d H:i:s") . "<br>"; // Current date & time in standard format YYYY-MM-DD HH:MM:SS format
echo date("l, F jS, Y")."<br>"; //Current date & time in standard format human-readable format
echo "Year (2 digit): " . date("y") . "<br>"; // Outputs: 24
echo "Year (4 digit): " . date("Y") . "<br>"; // Outputs: 2024
echo "Month (numeric): " . date("m") . "<br>"; // Outputs: 07
echo "Month (short text): " . date("M") . "<br>"; // Outputs: Jul
echo "Month (full text): " . date("F") . "<br>"; // Outputs: July
echo "Day of the month: " . date("d") . "<br>"; // Outputs: 19
echo "Day of the week (numeric): " . date("w") . "<br>"; // Outputs: 5 (0 = Sunday, 6 = Saturday)
echo "Day of the month with suffix: " . date("jS") . "<br>"; // Outputs: 19th
echo "Day of the week (short text): " . date("D") . "<br>"; // Outputs: Fri
echo "Day of the week (full text): " . date("l") . "<br>"; // Outputs: Friday
echo "Hour (12-hour): " . date("h") . "<br>"; // Outputs: 05
echo "Hour (24-hour): " . date("H") . "<br>"; // Outputs: 17
echo "Minutes: " . date("i") . "<br>"; // Outputs: 00
echo "Seconds: " . date("s") . "<br>"; // Outputs: 58
echo "AM/PM: " . date("a") . "<br>"; // Outputs: PM

echo "Current timestamp: " . time() . "<br>"; // Current timestamp (seconds since Unix epoch)

// Date Calculations

$today = new DateTime(); // Create a DateTime object for today
$tomorrow = new DateTime("+1 day"); // Tomorrow's date
echo $tomorrow->format("Y-m-d") . "<br>"; // Format tomorrow's date

$interval = $today->diff($tomorrow); // Calculate time difference
echo $interval->format("%d days, %h hours, %i minutes") . "<br>"; // Output interval

//$timestamp = 1625097600; // Example timestamp (July 1st, 2021)
$timestamp = 1703462400; // Christmas Day 2023
echo date("F j, Y", $timestamp) . "<br>"; // Formatted date (July 1, 2021)
echo date("g:ia", $timestamp) . "<br>"; // Formatted time (12:00am)

echo "<br>";

$epoch = new DateTime('1970-01-01 00:00:00'); //try change date or time each digit

// Get the timestamp for the epoch
$epochTimestamp = $epoch->getTimestamp();

// Output the timestamp
echo "Unix epoch timestamp: $epochTimestamp";

echo "<br><br>";

// Timezones

date_default_timezone_set("Asia/Bangkok"); // Set default timezone (Thailand)
echo date("Y-m-d H:i:s") . " (Asia/Bangkok)<br>";

date_default_timezone_set("UTC"); // Set default timezone UTC/GMT
echo date("Y-m-d H:i:s") . " (UTC)<br>";

// Converting Strings to Timestamps

$strDate = "2023-12-25 14:30:00";
$timestamp = strtotime($strDate); // Convert string to timestamp
echo $timestamp . "<br>"; // Output timestamp
echo "<br>";
// 2. Retrieve Date Information (getdate())
$date = getdate();
echo 'Today is ' . $date['weekday'] . ', ' . $date['month'] . ' ' . $date['mday'] . ', ' . $date['year'];
echo "<br>";
echo 'Time now is '. $date["hours"]. ': ' . $date["minutes"] . ': ' . $date["seconds"];

// Validating Dates

$isValid = checkdate(12, 25, 2023); // Check if a date is valid
//echo ($isValid) ? "Valid date" : "Invalid date";

echo "<br>";

// 3. Create a Custom Timestamp (mktime())
//$custom_timestamp = mktime($hour, $minute, $second, $month, $day, $year); 

// Using mktime() function to know the complete date 
echo date("M-d-Y", mktime(0, 0, 0, 12, 1, 2002)) . "<br>"; 
  
// Using mktime() function to know the 
// complete date for an out-of-range input 
echo date("M-d-Y", mktime(0, 0, 0, 12, 40, 2002)); 

// More Functions..Explore the full list in the PHP documentation:
// https://www.php.net/manual/en/ref.datetime.php

?>