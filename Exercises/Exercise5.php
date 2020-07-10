<?php
/* George Brown College
   PHP Foundations of PHP
   Igor Kamzic #100186019
 */

$number1 = 15;
$number2 = 2;
$number3 = 16.587;
$result1 = 0;
$result2 = 0;

$result1 = $number1 + ($number2 + $number1)/$number3 + $number2 * 18;
$result2 = $number3/$number2 + $number3 * $number1 - ($number1 * $number2);

echo $result1;
echo "<br />";
echo $result2;


?>