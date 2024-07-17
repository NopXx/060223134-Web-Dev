<?php

// Section: Arithmetic Operators: +,-,*,/,%
echo "<h3>Arithmetic Operators: +, -, *, /, % </h3>";
$a = 10;
$b = 3;
echo "Numbers: $a and $b<br>"; // Displaying the original numbers

echo "Addition:       $a + $b = " . ($a + $b) . "<br>";
echo "Subtraction:    $a - $b = " . ($a - $b) . "<br>";
echo "Multiplication: $a * $b = " . ($a * $b) . "<br>";
echo "Division:       $a / $b = " . ($a / $b) . "<br>";
echo "Modulus (Remainder): $a % $b = " . ($a % $b) . "<br>";
echo "<hr>";

// Section: Assignment Operators: =, +=, -=, *=, /=, %=
echo "<h3>Assignment Operators: =, +=, -=, *=, /=, %=</h3>";
$a = 5;

echo "a = $a";
echo "<br>";

$a += 3;  // Equivalent to: $a = $a + 3
echo "a += 3: ".$a;
echo "<br>";

$a -= 2;  // Equivalent to: $a = $a - 2
echo "a -= 2: $a<br>";

$a *= 4;  // Equivalent to: $a = $a * 4
echo "a *= 4: $a<br>";

$a /= 2;  // Equivalent to: $a = $a / 2
echo "a /= 2: $a<br>";

$a %= 5;  // Equivalent to: $a = $a % 5
echo "a %= 5: $a<br>";
echo "<hr>";

// Section: Comparison Operators: ==, !=, >, <, >=, <=
echo "<h3>Comparison Operators: ==, !=, <>,  >, <, >=, <=</h3>";

$a = 10;
$b = 5;
echo "\$a = 10, \$b = 5<br>";
echo "<hr>";
// Display only true/false using Ternary Operator(?:)
    echo "$a == $b: ";
    if ($a == $b) {
        echo "true";
    } else {
        echo "false";
    }
echo "<br>"; // Equal to

echo "$a != $b: " . ($a != $b ? "true" : "false") . "<br>"; // Not equal to
echo "$a <> $b: " . ($a <> $b ? "true" : "false") . "<br>"; // Not equal to (less common)
echo "$a > $b: " . ($a > $b ? "true" : "false") . "<br>";   // Greater than
echo "$a < $b: " . ($a < $b ? "true" : "false") . "<br>";   // Less than
echo "$a >= $b: " . ($a >= $b ? "true" : "false") . "<br>"; // Greater than or equal to
echo "$a <= $b: " . ($a <= $b ? "true" : "false") . "<br>"; // Less than or equal to

echo "<br>";
echo $username = isset($_POST["username"]) ? $_POST["username"] : "lisa";
echo "<br><br>";


// Using var_dump() for detailed boolean output
echo "Using vardump()<br>";
echo "$a == $b: "; var_dump($a == $b); echo "<br>"; // Equal to
echo "$a != $b: "; var_dump($a != $b); echo "<br>"; // Not equal to
echo "$a <> $b: "; var_dump($a <> $b); echo "<br>"; // Not equal to (less common)
echo "$a > $b: "; var_dump($a > $b); echo "<br>";   // Greater than
echo "$a < $b: "; var_dump($a < $b); echo "<br>";   // Less than
echo "$a >= $b: "; var_dump($a >= $b); echo "<br>"; // Greater than or equal to
echo "$a <= $b: "; var_dump($a <= $b); echo "<br>"; // Less than or equal to
echo "<hr>";

//!= VS. <>
$x = 5;
$y = "5";

echo "\$x = ";echo var_dump($x);echo "\$y = ";echo var_dump($y);echo "<br>"; 
if ($x != $y) {
  echo "$x is not equal to $y"; 
} else{ echo "\$x!=\$y: "; echo var_dump($x); echo " is loosely equal to ";echo var_dump($y)."<br>";}

if ($x <> $y) {
  echo "$x is not equal to $y"; 
} else{ echo "\$x<>\$y: "; echo var_dump($x); echo " is loosely equal to ";echo var_dump($y)."<br>";}

// !== (the strict not equal operator) compare both the value and the type of variables
if ($x === $y) {
    echo "\$x===\$y: "; echo var_dump($x); echo "is strictly equal to ";echo var_dump($y); // This will be executed
} elseif($x !== $y){
    echo "\$x!==\$y: "; echo var_dump($x); echo "is strictly not equal to "; echo var_dump($y);
}

// Section: Logical Operators: And (&&, and), Or (||, or), Not (!)
echo "<h3>Logical Operators: && (and), || (or), ! (not)</h3>";

$a = true;
$b = false;

echo "\$a = true, \$b = false<br>";
echo "<hr>";
echo "$a && $b: "; var_dump($a && $b); var_dump($a AND $b); echo "<br>"; // And
echo "$a || $b: "; var_dump($a || $b); var_dump($a OR $b); echo "<br>"; // Or
echo "$a XOR $b: "; var_dump($a ^ $b); var_dump($a XOR $b); echo "<br>"; // Or
echo "!$a: "; var_dump(!$b); echo "<br>"; // Not
echo "<hr>";

// Section: Increment/Decrement Operators: Increment (++), Decrement (--)
echo "<h3>Increment/Decrement Operators: ++, --</h3>";

$a = 7;
echo "Initial a: $a<br>";

echo "++a: " . ++$a . "<br>";  // Pre-increment: Output: 8, $a is now 8
echo "a++: " . $a++ . "<br>";  // Post-increment: Output: 8, $a is now 9
echo "--a: " . --$na . "<br>";  // Pre-decrement: Output: 7, $a is now 7
echo "a--: " . $a-- . "<br>";  // Post-decrement: Output: 7, $a is now 6
echo "<hr>";

//Seciton: String Operators: Concatenation (.), Concatenation assignment (.=)
echo "<h3>String Operators: . (Concatenation), .= (Concatenation Assignment)</h3>";

$firstName = "Alice";
$lastName = "Johnson";

$fullName = $firstName . " " . $lastName;
echo "Full name: $fullName<br>"; 

$msg = "Welcome, ";
$msg .= $fullName;
echo $msg; // Output: Welcome, Alice Johnson
?>


?>
