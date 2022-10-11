<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Managers\FileManager;
use App\Managers\ImageManager;
use App\Models\Attachment;
use Illuminate\Support\Facades\Storage;


class AttachmentController extends Controller
{
    public function upload(UploadRequest $request)
    {
        $file = $request->all();
        $extension = $request->file('file')->getClientOriginalExtension();
        if (in_array($extension , Attachment::$types['image']) ) {
            $manager = new ImageManager();
            return $manager->store($file, $extension,'User/Images/');
        } else {
            $manager = new FileManager();
            return $manager->store($file , $extension, 'Test/files/');
        }

    }


    public function retrieve()
    {

    }

    public function delete(Request $request)
    {
        $fileName = $request->fileName;
        $path = $request->path;
        Storage::disk('public_uploads')->delete($path.$fileName);
        return true;
    }
}
