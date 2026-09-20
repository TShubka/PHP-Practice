<?php
/**
 * 07 - Constants
 * -----------------
 * Constants are identifiers for values that cannot change during execution.
 * - Defined using define() or the const keyword.
 * - By convention, constant names are written in UPPERCASE.
 * - Constants are global and can be accessed anywhere.
 */

// Using define()
define("SITE_NAME", "My PHP Learning Site");
define("MAX_USERS", 100);

echo "Site name: " . SITE_NAME . "\n";
echo "Max users allowed: " . MAX_USERS . "\n";

// Using const keyword (usually at the top level or inside classes)
const PI = 3.14159;
const COMPANY = "Zuma Market";

echo "Value of PI: " . PI . "\n";
echo "Company: " . COMPANY . "\n";

// Constants inside a class
class Config {
    const VERSION = "1.0.0";
    const APP_NAME = "PHP Basics Demo";
}

echo "App: " . Config::APP_NAME . " v" . Config::VERSION . "\n";

// Checking if a constant is defined
if (defined("SITE_NAME")) {
    echo "SITE_NAME constant is defined.\n";
}

// Attempting to change a constant would cause an error, e.g.:
// SITE_NAME = "New Name"; // This would cause a Fatal Error
