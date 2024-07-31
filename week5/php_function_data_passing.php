<?php

// 1. Default Arguments
function greet($name = "there") {
    echo "Hello, $name!<br>";
}

greet();        // Output: Hello, there! (Uses default)
greet("Alice"); // Output: Hello, Alice!

// 2. Pass by Value
function doubleByValue($number) {
    $number *= 2;
    echo "Inside function: $number<br>";
}

$value = 5;
doubleByValue($value);      // Output: Inside function: 10
echo "Outside function: $value<br>"; // Output: Outside function: 5 (Original value unchanged)

// 3. Pass by Reference (Notice the '&')
function doubleByReference(&$number) {
    $number *= 2;
    echo "Inside function: $number<br>";
}

$refValue = 5;
doubleByReference($refValue);   // Output: Inside function: 10
echo "Outside function: $refValue\n"; // Output: Outside function: 10 (Original value changed)

// 4. Variable-Length Arguments (Variadic)
function sumNumbers(...$numbers) { // Note the "..."
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }
    return $total;
}

echo sumNumbers(1, 2, 3) . "<br>";        // Output: 6
echo sumNumbers(10, 20, 30, 40) . "<br>"; // Output: 100

?>

