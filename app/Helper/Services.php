<?php

if (!function_exists('createDir')) {
    function createDir($fullDir)
    {
        $dir = pathinfo($fullDir, PATHINFO_DIRNAME);
        if (is_dir($dir)) {
            return true;
        }else{
            if (createDir($dir)) {
                if (mkdir($dir, 0777, true)) {
                    return true;
                }
            }
        }
        return false;
    }
}
