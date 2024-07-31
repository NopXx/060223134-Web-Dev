<?php

// Section1: Recursive function to calculate factorials
function factorial($n) {
  if ($n == 0) {         // Base Case: Factorial of 0 is 1
    return 1;
  } else {               // Recursive Case
    return $n * factorial($n - 1); 
  }
}

echo factorial(5);       // Output: 120

echo "<br>";

// Section 2: Global Variable Declaration
$globalVar = 10;

// Function to Modify Global Variable
function modifyGlobal() {
    global $globalVar; // Declare the intention to use the global variable
    $globalVar += 5; // Modify the global variable
    echo "Inside the function, globalVar is: $globalVar<br>"; 
}

// Initial Value
echo "Before function call, globalVar is: $globalVar<br>";

// Call the Function
modifyGlobal();

// Modified Value
echo "After function call, globalVar is: $globalVar<br>";


// Demonstrating Incorrect Usage (Local Variable with Same Name)
function incorrectModify() {
    $globalVar = 200; // This creates a local variable, not modifying the global
    echo "Inside incorrect function, local var is: $globalVar<br>";
}

incorrectModify();

echo "After incorrect function call, globalVar is STILL: $globalVar<br>"; // Global value unchanged

// Using the $GLOBALS Superglobal
function modifyUsingGLOBALS() {
    $GLOBALS['globalVar'] *= 2; // Modify using the $GLOBALS array
    echo "Inside function (using GLOBALS), globalVar is: " . $GLOBALS['globalVar'] . "<br>";
}

modifyUsingGLOBALS();
echo "After modifyUsingGLOBALS, globalVar is: $globalVar<br>";

//Section3: Basic Try...Catch Blocks:
function divide($dividend, $divisor) {
  try {
      if ($divisor == 0) {
          throw new Exception("Division by zero");
      }
      return $dividend / $divisor;
  } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
      // You can log the error, take corrective action, etc.
  }
}

echo divide(10, 2);  // Outputs: 5
echo "<br>";
echo divide(10, 0);  // Outputs: Error: Division by zero

?>
