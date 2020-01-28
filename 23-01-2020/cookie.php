<?php
    $timestamp = time();
    setcookie('usernameN', 'nikki', $timestamp + 10);
    setcookie('usernameK', 'ketul', $timestamp + 10);

    echo $_COOKIE['usernameN']."<br>";
    echo $_COOKIE['usernameK']."<br>"; 
?>