<?php

namespace App\Traits;
use App\Models\Attachment;
use App\Managers\FileManager;
use App\Managers\ImageManager;
use Illuminate\Support\Facades\Storage;

trait AttachmentTrait
{
    private function uploadAttachment($file, $path)
    {
        $extension = $file->file('file')->getClientOriginalExtension();
        if (in_array($extension , Attachment::$types['image']) ) {
            $manager = new ImageManager();
            return $manager->store($file, $extension,$path);
        } else {
            $manager = new FileManager();
            return $manager->store($file , $extension, $path);
        }
    }

    private function removeAttachment($fileName, $path)
    {
        Storage::disk('public_uploads')->delete($path.$fileName);
        return true;
    }
}
