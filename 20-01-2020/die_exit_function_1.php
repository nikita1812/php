<?php
$site = "https://www.w3schools.com/";
fopen($site,"r")
or exit("Unable to connect to $site");
?>

<?php
$site = "https://www.w3schools.com/";
fopen($site,"r")
or die("Unable to connect to $site");
?>