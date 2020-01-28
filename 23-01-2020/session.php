<?php
    session_start();
    //value st in session
    $_SESSION['usernameK'] = 'ketul';
    $_SESSION['ageK'] = '20';
    $_SESSION['usernameN'] = 'nikki';
    $_SESSION['ageN'] = '21';

    if(isset($_SESSION['usernameN'])){
        echo "welcome ".$_SESSION['usernameN'].". you are ". $_SESSION['ageN'] . "<br>";
    }
    else{
        echo "please log in usernameN. <br>";
    }

    //session is unset
    unset($_SESSION['usernameK']);
    if(isset($_SESSION['usernameK'])){
        echo "welcome ".$_SESSION['usernameK'].". you are ".$_SESSION['ageK']."<br>";
    }
    else{
        echo "please log in usernameK. <br>";
    }
?>