<?php
/**
 * 06 - PHP Data Types
 * ----------------------
 * PHP supports several data types:
 * String, Integer, Float (Double), Boolean, Array, Object, NULL
 */

// String - text data
$str = "Hello, PHP!";
echo "String: $str (" . gettype($str) . ")\n";

// Integer - whole numbers
$int = 42;
echo "Integer: $int (" . gettype($int) . ")\n";

// Float / Double - decimal numbers
$float = 3.14;
echo "Float: $float (" . gettype($float) . ")\n";

// Boolean - true or false
$bool = true;
echo "Boolean: " . ($bool ? "true" : "false") . " (" . gettype($bool) . ")\n";

// Array - collection of values
$array = ["PHP", "HTML", "CSS", "JavaScript"];
echo "Array: " . implode(", ", $array) . " (" . gettype($array) . ")\n";

// Associative array
$person = [
    "name" => "Shuaib",
    "age"  => 24,
    "city" => "Mogadishu"
];
echo "Person name: " . $person["name"] . " (" . gettype($person) . ")\n";

// Object
class Student {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}
$obj = new Student("Shuaib");
echo "Object property: " . $obj->name . " (" . gettype($obj) . ")\n";

// NULL - variable with no value
$empty = null;
echo "Null variable type: " . gettype($empty) . "\n";

// Checking types with var_dump
var_dump($str, $int, $float, $bool);
