<?php
/**
 * 04 - Comments and Coding Style
 * --------------------------------
 * PHP supports single-line and multi-line comments.
 * Good coding style makes code easier to read and maintain.
 */

// This is a single-line comment (C++ style)
# This is also a single-line comment (shell style)

/*
 * This is a multi-line comment block.
 * It can span several lines and is useful
 * for explaining more complex logic.
 */

// --- Example of good coding style ---

// Use meaningful variable names
$studentName = "Shuaib";
$studentAge  = 24;

// Keep consistent indentation and spacing around operators
if ($studentAge >= 18) {
    echo "$studentName is an adult.\n";
} else {
    echo "$studentName is a minor.\n";
}

// Use comments to explain WHY, not just WHAT
// Here we add a small bonus because the student passed with a high grade
$grade = 85;
$bonus = ($grade >= 80) ? 5 : 0; // bonus only for high achievers
echo "Final score: " . ($grade + $bonus) . "\n";
