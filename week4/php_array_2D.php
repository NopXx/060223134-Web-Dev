<?php

// Creating a two-dimensional array representing student grades
$student_grades = [
    ["John", 92, 88, 95],   // John's grades in Math, English, Science
    ["Emily", 85, 90, 87],  // Emily's grades
    ["Michael", 98, 86, 92] // Michael's grades
];

print_r($student_grades);
echo "<br>";

echo implode(", ", $student_grades[0]); // display the array elements as a single string
echo "<br>";

// Accessing elements in the multidimensional array

// Get John's Math grade (first student, first grade)
echo "John's Math grade: " . $student_grades[0][1] . "<br>"; // Output: 92

// Get Emily's Science grade (second student, third grade)
echo "Emily's Science grade: " . $student_grades[1][3] . "<br>"; // Output: 87

// Add a new grade for John
$student_grades[0][] = 90; // Add History grade (appends to the end)
echo "John's grade: ";
print_r($student_grades[0]);
echo "<br>";

// Replacing Emily's Science grade
$student_grades[1][3] = 92;

// Removing Michael from the array
unset($student_grades[2]);
$student_grades = array_values($student_grades); // Re-index the array

// Add a new student, David
$student_grades[] = ["David", 95, 89, 91];

// Iterating through the updated array
echo "<br>Updated Grades:<br>";
foreach ($student_grades as $student) {
    echo "Grades for {$student[0]}: "; // Print student's name
    
    // Start at index 1 to skip the name
    for ($i = 1; $i < count($student); $i++) {
        echo $student[$i] . " ";
    }

    echo "<br>";
}

$student_grades = [
    ["John", 92, 88, 95],   
    ["Emily", 85, 90, 87],  
    ["Michael", 98, 86, 92] 
];

?>
