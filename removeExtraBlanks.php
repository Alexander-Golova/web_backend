<?php
    require_once('include/common.inc.php');
    if (isset($_GET['text']))
    {
        $text = $_GET['text'];
        echo removeExtraBlanks($text); 
    }
    else
    {
        header("HTTP/1.1 400 Bad string!");
    }