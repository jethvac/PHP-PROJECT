Write a PHP program to print 15 to 20 using While and Do While.

<?php
echo "<h3>Using while loop</h3>";
$i = 15;
while ($i <= 20) {
    echo $i . " ";
    $i++;
}

echo "<h3>Using do...while loop</h3>";
$j = 15;
do {
    echo $j . " ";
    $j++;
} while ($j <= 20);
?>
