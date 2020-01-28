<?php 
    session_start();    
    function getValue($sections, $fieldValue, $returnType = ""){
        return isset($_POST[$sections][$fieldValue]) ? $_POST[$sections][$fieldValue] : getValueSession($sections,$fieldValue, $returnType);
    }
    function setValueSession($sections){
        isset($_POST[$sections]) ? $_SESSION[$sections] = $_POST[$sections] : [];
    }
    function getValueSession($sections, $fieldValue, $returnType){
        return isset($_SESSION[$sections][$fieldValue]) ? $_SESSION[$sections][$fieldValue] : $returnType;
    }

    /*function validation($sections,$fieldValue,$data){
        switch($data){
            case 'firstname':
                $firstnameVal = '/^[A-Za-z]+$/';
                break;
            default : 
                break;
        }
    }*/

?>

