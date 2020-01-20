<?php

$string = "This is string example 1234567890";
$string_suffled = str_shuffle($string);
$half = substr($string_suffled,0,5);
$halfLen = substr($string_suffled,0,strlen($string)/5);
echo $string_suffled,"<br>";
echo $half,"<br>";
echo $halfLen,"<br>";

$string_reverse = strrev($string);
echo "String reversed : ".$string_reverse;

?>