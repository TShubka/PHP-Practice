<?php
/**
 * 08 - PHP Operators
 * ---------------------
 * PHP supports several categories of operators:
 * Arithmetic, Assignment, Comparison, Logical, Increment/Decrement, String
 */

// Arithmetic operators
$a = 10;
$b = 3;
echo "Addition: $a + $b = " . ($a + $b) . "\n";
echo "Subtraction: $a - $b = " . ($a - $b) . "\n";
echo "Multiplication: $a * $b = " . ($a * $b) . "\n";
echo "Division: $a / $b = " . ($a / $b) . "\n";
echo "Modulus: $a % $b = " . ($a % $b) . "\n";
echo "Exponentiation: $a ** $b = " . ($a ** $b) . "\n";

// Assignment operators
$c = 5;
$c += 3; // $c = $c + 3
echo "After += 3: $c\n";
$c -= 2;
echo "After -= 2: $c\n";
$c *= 4;
echo "After *= 4: $c\n";

// Comparison operators
$x = 10;
$y = "10";
var_dump($x == $y);   // true  (loose comparison, only value)
var_dump($x === $y);  // false (strict comparison, value AND type)
var_dump($x != $y);   // false
var_dump($x !== $y);  // true
echo ($x > 5 ? "10 is greater than 5\n" : "");

// Logical operators
$isAdult = true;
$hasID = false;
if ($isAdult && $hasID) {
    echo "Can proceed.\n";
} elseif ($isAdult || $hasID) {
    echo "Partially eligible.\n";
} else {
    echo "Not eligible.\n";
}
echo "Logical NOT: " . (!$hasID ? "hasID is false\n" : "hasID is true\n");

// Increment / Decrement operators
$counter = 1;
echo "Original: $counter\n";
echo "Post-increment: " . $counter++ . " (counter is now $counter)\n";
echo "Pre-increment: " . ++$counter . "\n";
echo "Post-decrement: " . $counter-- . " (counter is now $counter)\n";

// String operator (concatenation)
$firstName = "Shuaib";
$lastName = "Enow";
$fullName = $firstName . " " . $lastName;
echo "Full name: $fullName\n";
