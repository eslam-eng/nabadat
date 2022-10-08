<?php

namespace App\Managers;
use Illuminate\Support\Facades\Storage;


class FileManager
{
    public function store($file , $extension, $fullDir)
    {
        $fileName = uniqid() . "." . $extension;
        if (!file_exists($fullDir)) {
            createDir($fullDir . "file");
        }
        $path = $fullDir.$fileName;
        Storage::disk('public_uploads')->put($fullDir, $file['file']);
        return $path;
    }
}
