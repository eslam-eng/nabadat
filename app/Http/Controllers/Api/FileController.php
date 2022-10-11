<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\FilesManager;
use App\Exceptions\BadRequestHttpException;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file;
        $manager = new FilesManager;
        if (is_array($file) && !empty($file['src'])) {
            $src = $file['src'];
            if (!$request->has('file') || !$request->has('type')) {
                // throw new BadRequestHttpException('missing inputs', 500);
            }
            if (env('AWS_ACCESS_KEY_ID')) {
                #upload on AWS_S3
                // $output = $manager->uploadS3($src, $request->type, $request->path);
            } else {
                $output = $manager->upload($src, $request->type, $request->path);
            }
            return response()->json($output);
        } else {
            $extension = $request->file->getClientOriginalExtension();

            if (env('AWS_ACCESS_KEY_ID')) {
                #upload on AWS_S3
                // return $manager->uploadImageS3($file, $request->path, $extension);
            } else {
                return $manager->uploadImage($file, $request->path, $extension);
            }
        }
    }

    public function remove(Request $request)
    {
        $dir = $request->path;
        $fileName = $request->file_name;
        if (!$request->has('path') || !$request->has('file_name')) {
            throw new BadRequestHttpException('missing inputs', 500);
        }
        $manager = new FilesManager;
        return $manager->removeFile($dir , $fileName);
    }
}
