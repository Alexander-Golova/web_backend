<?php
    require_once('include/common.inc.php');
    if (isset($_GET['password']))
    {
        $password = $_GET['password'];
        echo passwordStrength($password); 
    }
    else
    {
        header("HTTP/1.1 400 Bad string!");
    }