<?php
$num1 = 10;
$num2 = 20; 
$sum =  $num1 + $num2;
$multiple = $num1 * $num2;
echo $multiple/$sum."<br>";
echo "Before Function Value = ".($multiple + $sum)/3,"<br>";

function variableTest(){
    global $num1;
    $local = 20;
    //inside this variable generate a error
    //echo $sum + $multiple;
    echo "Global Variable inside the function=".$num1."<br>";
    $GLOBALS['div'] = ($GLOBALS['multiple'] + $GLOBALS['sum'])/2;
}
variableTest();
echo "Outside the function value are use:".$div."<br>";
echo "After The Function Value = ".($multiple + $sum)/2,"<br><br>";
echo "Static variable:";
function staticVariable(){
    static $test = 0;
    echo $test;
}
staticVariable();
staticVariable();
staticVariable();
?>
