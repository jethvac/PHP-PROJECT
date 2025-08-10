1. Write a PHP program for print Previous semester Result using variables & constants in PHP.


<?php

define("STUDENT_NAME", "JETHAVA CHIRAG JAYANTILAL");
define("ENROLLMENT_NO", "92200527043");
define("COURSE_NAME", "BACHELOR OF COMPUTER APPLICATIONS");
define("COLLEGE", "FACULTY OF COMPUTER APPLICATIONS");

$semester = 5;
$sgpa = 5.50;
$total_credit = 22;
$result_status = "PASS";
$subjects = [
    ["code" => "05BC0509", "name" => "MINI PROJECT - 4 (PYTHON)", "credit" => 2, "grade" => "B"],
    ["code" => "05BC2501", "name" => "MANAGEMENT INFORMATION SYSTEM", "credit" => 4, "grade" => "C"],
    ["code" => "05BC2502", "name" => "SOFTWARE TESTING", "credit" => 5, "grade" => "A"],
    ["code" => "05BC2504", "name" => "WEB APPLICATION DEVELOPMENT-1 (PHP)", "credit" => 6, "grade" => "D"],
    ["code" => "05BC2505", "name" => "COMPUTER GRAPHICS", "credit" => 5, "grade" => "C"],
];

echo "<h2>Previous Semester Result</h2>";
echo "<strong>Student Name:</strong> " . STUDENT_NAME . "<br>";
echo "<strong>Enrollment No:</strong> " . ENROLLMENT_NO . "<br>";
echo "<strong>Course:</strong> " . COURSE_NAME . "<br>";
echo "<strong>College:</strong> " . COLLEGE . "<br><br>";

echo "<strong>Semester:</strong> $semester<br>";
echo "<strong>SGPA:</strong> $sgpa<br>";
echo "<strong>Total Credit:</strong> $total_credit<br>";
echo "<strong>Result Status:</strong> $result_status<br><br>";

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Subject Code</th><th>Subject Name</th><th>Credit</th><th>Grade</th></tr>";
foreach ($subjects as $sub) {
    echo "<tr>";
    echo "<td>{$sub['code']}</td>";
    echo "<td>{$sub['name']}</td>";
    echo "<td>{$sub['credit']}</td>";
    echo "<td>{$sub['grade']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
