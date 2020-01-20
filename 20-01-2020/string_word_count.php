<?php

$string = "This is a computer & laptop.";
$string_word_count_0 = str_word_count($string,0,'.');
$string_word_count_1 = str_word_count($string,1,'.&');
$string_word_count_2 = str_word_count($string,2);
print_r($string_word_count_0); echo "<br>";
print_r($string_word_count_1); echo "<br>";
print_r($string_word_count_2); echo "<br>";
?>
