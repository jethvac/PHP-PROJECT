4. Write a PHP program to print current month using if..else& switch case.


<?php
$monthNumber = date("n");
$monthName = "";

// Using if...else
echo "<h3>Current Month using if...else</h3>";
if ($monthNumber == 1) {
    $monthName = "January";
} elseif ($monthNumber == 2) {
    $monthName = "February";
} elseif ($monthNumber == 3) {
    $monthName = "March";
} elseif ($monthNumber == 4) {
    $monthName = "April";
} elseif ($monthNumber == 5) {
    $monthName = "May";
} elseif ($monthNumber == 6) {
    $monthName = "June";
} elseif ($monthNumber == 7) {
    $monthName = "July";
} elseif ($monthNumber == 8) {
    $monthName = "August";
} elseif ($monthNumber == 9) {
    $monthName = "September";
} elseif ($monthNumber == 10) {
    $monthName = "October";
} elseif ($monthNumber == 11) {
    $monthName = "November";
} elseif ($monthNumber == 12) {
    $monthName = "December";
}
echo "Current Month: " . $monthName . "<br>";

// Using switch case
echo "<h3>Current Month using switch case</h3>";
switch ($monthNumber) {
    case 1:  $monthName = "January"; break;
    case 2:  $monthName = "February"; break;
    case 3:  $monthName = "March"; break;
    case 4:  $monthName = "April"; break;
    case 5:  $monthName = "May"; break;
    case 6:  $monthName = "June"; break;
    case 7:  $monthName = "July"; break;
    case 8:  $monthName = "August"; break;
    case 9:  $monthName = "September"; break;
    case 10: $monthName = "October"; break;
    case 11: $monthName = "November"; break;
    case 12: $monthName = "December"; break;
}
echo "Current Month: " . $monthName;
?>
