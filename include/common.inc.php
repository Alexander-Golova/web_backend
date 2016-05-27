<?php
    $fileDir = scandir('C:/!git/server2go/htdocs/web_backend/include');
    foreach ($fileDir as $fileName)
    {
       if (is_file('C:/!git/server2go/htdocs/web_backend/include/' . $fileName) && stristr($fileName, ".inc.php"))
       {
           require_once($fileName);
       }
    }
