<?php
    $redirect_page = "http://google.com";
    $redirect_w3 = "server_variable.php";
    $redirect = true;

    if($redirect == false){
        header('Location: '.$redirect_page);
    }
    else{
        header('Location:'.$redirect_w3);
    }   
?>