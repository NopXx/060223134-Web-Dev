<?php

// SECTION 1: NUMERIC ARRAY OPERATIONS

// 1.1 Declaration:
$numbers = array(5, 12, 30);  // Using array() function

// 1.2 Accessing Elements:
echo "Second element (index 1): " . $numbers[1] . "<br>";  
echo "Sum of all elements: " . array_sum($numbers) . "<br>"; 

// 1.3 Modifying Elements:
$numbers[1] = 15;
echo "Sum after modification: " . array_sum($numbers) . "<br>";

// 1.4 Adding Elements:
$numbers[] = 42;      // Add to the end
echo "Fourth element (newly added): " . $numbers[3] . "<br>";  
array_push($numbers, 8); // Add to the end (alternative)
echo "Fifth element (newly added): " . $numbers[4] . "<br>";  
array_unshift($numbers, 1); // Add to the beginning
echo "First element (newly added): " . $numbers[0] . "<br>"; 

// 1.5 Looping Through:
echo "Looping with 'for':<br>";
for ($i = 0; $i < 3; $i++) {  
    echo $numbers[$i] . "<br>";
}

echo "Looping with 'foreach': ";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "<br><br>";  // Add space between sections


// SECTION 2: STRING ARRAY OPERATIONS

// 2.1 Declaration:
$colors = ["red", "green", "blue"];

// 2.2 Accessing Elements:
echo "Second color (index 1): " . $colors[1] . "<br>";  
echo "All colors: " . implode(" ", $colors) . "<br>";  

// 2.3 Modifying Elements:
$colors[1] = "yellow";
echo "All colors after modification: " . implode(" ", $colors) . "<br>";  

// 2.4 Adding Elements:
$colors[] = "purple"; // Add to the end
echo "Fourth color (newly added): " . $colors[3] . "<br>"; 
array_push($colors, "orange"); // Add to the end (alternative)
echo "Fifth color (newly added): " . $colors[4] . "<br>";  
array_unshift($colors, "pink"); // Add to the beginning
echo "First color (newly added): " . $colors[0] . "<br>"; 

// 2.5 Looping Through:
echo "Looping with 'for':<br>";
for ($i = 0; $i < 3; $i++) { 
    echo $colors[$i] . "<br>";
}
echo "Looping with 'foreach': ";
foreach ($colors as $color) {
    echo $color . " ";
}
echo "<br>";

