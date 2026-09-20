<?php
/**
 * 09 - Conditional Statements
 * -------------------------------
 * PHP supports if, if-else, if-elseif-else, switch, and the ternary operator
 * to control the flow of a program based on conditions.
 */

// Simple if statement
$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote.\n";
}

// if-else statement
$temperature = 15;
if ($temperature > 25) {
    echo "It's a hot day.\n";
} else {
    echo "It's a cool day.\n";
}

// if-elseif-else statement
$score = 85;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} else {
    echo "Grade: F\n";
}

// switch statement
$day = "Monday";
switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!\n";
        break;
    case "Monday":
        echo "Back to work/study.\n";
        break;
    default:
        echo "It's a regular weekday.\n";
        break;
}

// Ternary operator (shorthand if-else)
$isLoggedIn = true;
$status = $isLoggedIn ? "Welcome back!" : "Please log in.";
echo $status . "\n";

// Null coalescing operator (PHP 7+), often used with conditionals
$username = null;
$displayName = $username ?? "Guest";
echo "Display name: $displayName\n";
