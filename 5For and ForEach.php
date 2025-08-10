//Write a PHP programto print 5 to 10 using For and ForEach.

<?php
echo "<h3>Using for loop</h3>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>Using foreach loop</h3>";
$numbers = [5, 6, 7, 8, 9, 10];
foreach ($numbers as $num) {
    echo $num . " ";
}
?>
