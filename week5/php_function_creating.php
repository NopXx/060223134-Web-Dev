<?php

    function greet($name = "there") {
        echo "Hello, $name!<br>";
    }

    greet();
    greet("Alice");

    function doubleByValue($number) {
        $number *= 2;
        echo "Inside function: $number<br>";
    }

    $value = 5;
    doubleByValue($value);
    echo "Outside function: $value<br>";

    function doubleByReference(&$number) {
        $number *= 2;
        echo "Inside function: $number<br>";
    }

    $refValue = 5;
    doubleByReference($refValue);
    echo "Outside function: $refValue<br>";

    function sumNumber(...$number) {
        $total = 0;
        foreach ($number as $num) {
            $total += $num;
        }
        return $total;
    }

    echo sumNumber(1, 2, 3) . "<br>"; // Outputs: 15
    echo sumNumber(5, 10, 15, 20) . "<br>"; // Outputs: 50

?>