<?php

declare(strict_types=1);

function test()
{
    echo "function call <br>";
}
test();

function value($name)
{
    echo "$name", "<br>";
}
value('kajal');
value('Alena');
value('steffon');
value('demmon');

function nameYear($name, $year)
{
    echo "$name born in $year <br>";
}
nameYear('kajal', 2004);
nameYear('Alena', 2008);
nameYear('steffon', 1978);
nameYear('demmon', 1965);

function displayDate(string $day, int $date, int $year)
{
    return $day . ' ' . $date . ' ' . $year;
}
echo displayDate('monday', 18, 2020);

function add($num1, $num2)
{
    return $num1 + $num2;
}
echo add(2, '5'), "<br>";

function divide(float $a, float $b)
{
    $z = $a / $b;
    return (int) ($z);
}
echo divide(20.4, 10.2);

function addNumbers(int $num1, int $num2)
{
    return $num1 + $num2;
}
echo addNumbers(2, 5) . '<br>';

$sum = divide(addNumbers(20,20),addNumbers(10,10));
echo "Two function call sum are ".$sum."<br>";



?>