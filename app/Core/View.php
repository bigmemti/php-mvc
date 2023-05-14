<?php

namespace App\Core;

class View  
{
    const TEMP_DIR = __DIR__."/../../views/";
    public static function make($file, array $variables)
    {
        
        $view = file_get_contents(self::TEMP_DIR.$file.'.html');
        
        foreach ($variables as $key => $value){
            $view = str_replace("{{\$$key}}", $value, $view);
        }
        echo $view;
        return 0;
    }    
}
