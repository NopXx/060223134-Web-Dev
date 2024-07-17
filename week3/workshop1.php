<?php

// example 1
$x = 5 + 3 * 2;
echo $x;

echo '<br><br>';

// example 2
$age = 25;
$isStudent = false;

if ($age >= 18 && !$isStudent) {
    echo 'Eligible for discount';
}

echo '<br><br>';

// example 3
$x = 10;
$y = 20;
$y = ++$x;
echo "\$x = $x, \$y = $y";

echo '<br>';

$x = 10;
$y = 20;
$y = $x++;
echo "\$x = $x, \$y = $y";

echo '<br><br>';

// example 4
$a = 10;
$b = 5;
$c = 3;
$result = ($a - $b) * $c + $a / 2;
echo $result;

echo '<br><br>';

// example 5
$principal = 1000;
$rate = 0.05;
$time = 3;
$n = 12;

$amount = $principal * (pow(1 + ($rate / $n), ($n * $time)));

$interest_earned = $amount - $principal;

echo 'Total amount after $time years: $' . number_format($amount, 2) . '<br>';
echo "Interest earned: $" . number_format($interest_earned, 2) . "<br>";

echo '<br><br>';

// example 6
$score = 85;
$isMember = true;

// $grade = ($score >= 90) ? 'A' : (($score >= 80) ? ($isMember) ? 'B+' : 'B' : ($score >= 70) ? 'C' : 'D');

// echo "Grade: $grade";
