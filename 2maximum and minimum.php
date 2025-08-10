2. Write a PHP program to find out maximum and minimum number



<?php
$numbers = [45, 12, 89, 33, 67, 5, 99, 23];

$max = max($numbers);
$min = min($numbers);

	echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min . "<br>";
?>
