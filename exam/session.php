<?php
session_start();
function getValue($section, $fieldValue)
{
    return isset($_POST[$section][$fieldValue])
        ? $_POST[$section][$fieldValue]
        : getSession($section, $fieldValue);
}
function setSession($section)
{
    isset($_POST[$section]) ? $_SESSION[$section] = $_POST[$section] : "";
}
function getSession($section, $fieldValue)
{
    return isset($_SESSION[$section][$fieldValue]) ? $_SESSION[$section][$fieldValue] : "";
}

?>