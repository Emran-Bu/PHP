<?php

#equal to
$num1 = 5;
$num2 = 10;

$result = $num1 == $num2;
echo "equal to: " .$result . "<br>";

#equal value and equal type
$num1 = 10;
$num2 = 10;

$result = $num1 === $num2;
echo "equal value and equal type: " .$result . "<br>";

#not equal value
$num1 = 10;
$num2 = 10;

$result = $num1 != $num2;
echo "not equal to: " .$result . "<br>";

#not equal value 2nd rule
$num1 = 90;
$num2 = 10;

$result = $num1 <> $num2;
echo "not equal value 2nd rule: " .$result . "<br>";

#not equal value
$num1 = "9";
$num2 = 10;

$result = $num1 !== $num2;
echo "not equal and data type: " .$result . "<br>";

#Greater Than
$num1 = 11;
$num2 = 10;

$result = $num1 > $num2;
echo "Greater Than: " .$result . "<br>";

#Greater Than equal
$num1 = 11;
$num2 = 10;

$result = $num1 >= $num2;
echo "Greater Than equal: " .$result . "<br>";

#Less Than
$num1 = 11;
$num2 = 10;

$result = $num1 < $num2;
echo "Greater Than: " .$result . "<br>";

#Less Than
$num1 = 11;
$num2 = 12;

$result = $num1 <= $num2;
echo "Greater Than: " .$result . "<br>";

#spaceship
$num1 = 11;
$num2 = 12;

$result = $num1 <=> $num2;
echo "spaceship: " .$result . "<br>";
?>