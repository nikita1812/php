<?php
    $IP_Address = $_SERVER['REMOTE_ADDR'];
    $IP_Blocked = array('::1','1:10:100:100');

    foreach($IP_Blocked as $IP){
        if($IP == $IP_Address){
            die("Your IP addres $IP_Address has been blocked.");
        }
    }
?>
<h1> IP Address </h1>