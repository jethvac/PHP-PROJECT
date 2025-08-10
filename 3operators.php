Write a PHP program for operators in PHP.

<?php
// Variables
$a = 15;
$b = 4;

echo "<h2>Operators in PHP</h2>";

// 1. Arithmetic Operators
echo "<h3>Arithmetic Operators</h3>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";

// 2. Assignment Operators
echo "<h3>Assignment Operators</h3>";
$c = $a;
echo "c = a → c = $c <br>";
$c += $b;
echo "c += b → $c <br>";
$c -= $b;
echo "c -= b → $c <br>";

// 3. Comparison Operators
echo "<h3>Comparison Operators</h3>";
echo "a == b → "; var_dump($a == $b); echo "<br>";
echo "a != b → "; var_dump($a != $b); echo "<br>";
echo "a > b → "; var_dump($a > $b); echo "<br>";
echo "a < b → "; var_dump($a < $b); echo "<br>";

// 4. Logical Operators
echo "<h3>Logical Operators</h3>";
$bool1 = true;
$bool2 = false;
echo "bool1 && bool2 → "; var_dump($bool1 && $bool2); echo "<br>";
echo "bool1 || bool2 → "; var_dump($bool1 || $bool2); echo "<br>";
echo "!bool1 → "; var_dump(!$bool1); echo "<br>";

// 5. Increment / Decrement Operators
echo "<h3>Increment / Decrement Operators</h3>";
$x = 10;
echo "x = $x <br>";
echo "++x = " . (++$x) . "<br>";
echo "x++ = " . ($x++) . " (after increment: $x)<br>";
echo "--x = " . (--$x) . "<br>";
echo "x-- = " . ($x--) . " (after decrement: $x)<br>";

// 6. String Operators
echo "<h3>String Operators</h3>";
$str1 = "Hello";
$str2 = " World";
echo "str1 . str2 = " . ($str1 . $str2) . "<br>";
$str1 .= $str2;
echo "str1 .= str2 → $str1<br>";
?>
