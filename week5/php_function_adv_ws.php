<?php

function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function outerFunction()
{
    $outerVar = "I'm outside!";

    function innerFunction()
    {
        global $outerVar;
        echo $outerVar . "<br>";
    }

    innerFunction();
}

function divide($dividend, $divisor)
{
    try {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . '<br>';
    }
}

echo "Fibonacci sequence: ";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}

echo "<br>";

outerFunction();
echo "<br>";

echo divide(10, 2) . "<br>";
echo divide(8, 0) . "<br>";
