<?php

$a = 10;
$b = 15;
$c = 5;

if($a < $b and $c < 10)
echo "true<br>";

if($a < $b && $c < 10)
echo "true<br>";

if($a < $b or $c < 10)
echo "true <br>";

if($a < $b || $c < 10)
echo "true <br>";

if(!($a < $b))
echo "true <br>";

if($a != $b)
echo "true <br>";

if($a <= 10 xor $b <= 4)
echo "true <br>";


?>