<?php
$globalVariable = "This is global variable";

function test(){
    global $globalVariable;
    $text = "Your text is ".$globalVariable."<br>";
    echo $text;
}
test();

function check($value){
    echo $value;
}
check($globalVariable);