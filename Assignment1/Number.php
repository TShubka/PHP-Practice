<?php
// Program: check whether a number is divisible by 3, 5, both, or neither

$number = 15; // You can change this value

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5.";
} elseif ($number % 3 == 0) {
    echo "$number is divisible by 3 only.";
} elseif ($number % 5 == 0) {
    echo "$number is divisible by 5 only.";
} else {
    echo "$number is divisible by neither 3 nor 5.";
}
?>