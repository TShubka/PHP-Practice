<?php
$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = intdiv($num, 10);
}

echo "Original number: 12345 <br>";
echo "Reversed number: $reverse";
?>