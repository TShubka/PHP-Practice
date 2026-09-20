<?php
/**
 * 03 - PHP Output: echo and print
 * ---------------------------------
 * - echo: outputs one or more strings, no return value, slightly faster.
 * - print: outputs a string, returns 1, can only take one argument.
 */

// Using echo with a single string
echo "Using echo to display text.\n";

// echo can output multiple values separated by commas
echo "Multiple", " ", "values", " ", "with", " ", "echo", "\n";

// Using print
print "Using print to display text.\n";

// print returns 1, so it can be used in an expression
$result = print "Print returns 1 after output.\n";
echo "The return value of print was: $result\n";

// Combining variables and text with concatenation
$user = "Shuaib";
echo "Hello " . $user . ", welcome to PHP!\n";

// Using printf for formatted output
printf("Formatted output: %s is %d years old.\n", "Shuaib", 24);
