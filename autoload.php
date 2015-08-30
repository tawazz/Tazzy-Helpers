<?php
    function databaseLoader($class)
    {
        $filename = strtolower($class) . '.php';
        $file = __DIR__ .'/Tazzy/Database/'.$filename;
        if (!file_exists($file))
        {
            return false;
        }
        require_once $file;
    }
    
    function helpersLoader($class)
    {
        $filename = strtolower($class) . '.php';
        $file = __DIR__ .'/Tazzy/Helpers/'. $filename;
        if (!file_exists($file))
        {
            return false;
        }
        require_once $file;
    }

    spl_autoload_register('databaseLoader');
    spl_autoload_register('helpersLoader');

?>
