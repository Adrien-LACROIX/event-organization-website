<?php

spl_autoload_register(function ($className) 
{
    $fileName = sprintf("%s%ssrc%s%s.php", ROOT, SLASH, SLASH, str_replace("\\", "/", $className));

    if (file_exists($fileName)) 
    {
        require ($fileName);
    } 
    else 
    {
        echo "file not found {$fileName}";
    }
});