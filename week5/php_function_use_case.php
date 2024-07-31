<?php

    echo "<h2>Mathematical Operations</h2>";

    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 8;
    $width = 12;
    $area = calculateArea($length, $width);

    echo "Area of rectangle with length $length and width $width: $area<br>";

    echo "<h2>String Manipulation</h2>";

    function reverseString($str) {
        return strrev($str);
    }

    $originalString = "Hello, world";
    $reversedString = reverseString($originalString);

    echo "Original string: $originalString<br>";
    echo "Reversed string: $reversedString<br>";

    echo "<h2>Data Transformations</h2>";

    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    $celsiusTemp = 25;
    $fahrenheitTemp = celsiusToFahrenheit($celsiusTemp);

    echo "$celsiusTemp (ºC) is equal to $fahrenheitTemp (ºF) <br>";

    echo "<h2>Data Validation</h2>";
    
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    $testEmail = "test@example.com";
    if (isValidEmail($testEmail)) {
        echo "$testEmail is a valid email address.<br>";
    } else {
        echo "$testEmail is not a valid email address.<br>";
    }

    echo "<h2>Output Generation (HTML)</h2>";

    function generateTable($data) {
        $html = "<table>";
        foreach ($data as $row) {
            $html.= "<tr>";
            foreach ($row as $cell) {
                $html.= "<td>$cell</td>";
            }
            $html.= "</tr>";
        }
        $html.= "</table>";
        return $html;
    }

    $tableData = [
        ["Name", "Age", "City"],
        ["Alice", 30, "New York"],
        ["Bob", 25, "London"]
    ];

    $tableOutput = generateTable($tableData);

    echo $tableOutput;

?>