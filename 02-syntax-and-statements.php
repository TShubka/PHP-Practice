<?php
/**
 * 02 - PHP Syntax and Statements
 * -------------------------------
 * - Every PHP statement ends with a semicolon (;).
 * - PHP code blocks start with <?php and (optionally) end with ?>.
 * - Statements are executed sequentially, top to bottom.
 * - PHP is case-sensitive for variables, but not for keywords/function names.
 */

// A statement: assigning a value to a variable
$name = "Shuaib";

// A statement: calling a function
echo "Welcome, " . $name . "!\n";

// Multiple statements on separate lines
$a = 5;
$b = 10;
$sum = $a + $b;

echo "The sum of $a and $b is $sum\n";

// Keywords are NOT case-sensitive (ECHO, Echo, echo all work)
ECHO "Keywords like ECHO are not case-sensitive.\n";

// But variables ARE case-sensitive
$Name = "Different Variable";
echo "\$name is '$name' while \$Name is '$Name'\n";
