<?php
    $array = array(10,6,8,14,24,2,7,1,5,23,15,22,21);
    $array_len = count($array);
    sort($array);
    echo "second highest number : ";
    echo $array[sizeof($array)-2];
?>
