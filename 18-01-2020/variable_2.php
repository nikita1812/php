<?php
class foo{
    var $bar = "I am bar.";
    var $arr = array('I am A.','I am B.','I am C.');
    var $r = "I am r.";
    var $quux = 'xxx';

}
$foo = new foo();
$bar = 'bar';
$quux = "yyy";
$baz = array('foo','bar','baz','quux');
echo $foo->$bar."<br>";
echo $foo->{$baz[1]}."<br>";
echo $foo->{$baz[3]}."<br>";

echo $baz[3]."<br>";


$start = 'b';
$end = 'ar';
echo $foo->{$start.$end}."<br>";

$arr = 'arr';
echo $foo->{$arr[1]};

?>