<?php
$nameTypes = array('first','last','company');
$name_first = "Nikki";
$name_last = "Patel";
$name_company = "php.net";

foreach($nameTypes as $type){
    print ${"name_$type"}."<br>";
}
?>