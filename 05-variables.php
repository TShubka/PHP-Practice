<?php
/**
 * 05 - Variables and Variable Naming Rules
 * -------------------------------------------
 * Rules for naming variables in PHP:
 * 1. Must start with a $ sign, followed by the name.
 * 2. A variable name must start with a letter or underscore.
 * 3. A variable name cannot start with a number.
 * 4. A variable name can only contain letters, numbers, and underscores.
 * 5. Variable names are case-sensitive ($age and $Age are different).
 */

// Valid variable names
$age = 24;
$_name = "Shuaib";
$student1 = "Enrolled";
$first_name = "Shuaib";
$lastName = "Enow";

echo "Age: $age\n";
echo "Name: $_name\n";
echo "Status: $student1\n";
echo "First name: $first_name, Last name: $lastName\n";

// Variables are loosely typed - no need to declare a type
$city = "Mogadishu";  // string
$year = 2026;          // integer
$price = 19.99;        // float
$isActive = true;      // boolean

echo "City: $city | Year: $year | Price: $price | Active: " . ($isActive ? "yes" : "no") . "\n";

// Variable scope example
function showMessage() {
    $message = "This variable is local to the function.";
    echo $message . "\n";
}
showMessage();

// Global variable example
$globalVar = "I am a global variable";
function useGlobal() {
    global $globalVar;
    echo $globalVar . "\n";
}
useGlobal();
