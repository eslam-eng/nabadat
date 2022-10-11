<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Exceptions\NotFoundHttpException;
class FilesManager
{
    protected $types = [
        //"image" => ['image/gif', 'image/jpeg', 'image/png', 'image/jpg', 'image/x-png', 'image/pjpeg'],
        "image" => ['jpg', 'jpeg', 'gif', 'png'],
        "master_plan" => ['jpg', 'jpeg', 'gif', 'png'],
        "pdf" => ['application/pdf'],
        "docx" => ['application/octet-stream'],
        "3DS" => ['application/3DS'],
        "zip" => ['application/x-zip-compressed'],
    ];

    public function upload($file, $type, $dir)
    {
        $fullDir = 'uploads/'.$dir;
        if (!file_exists($fullDir)) {
            createDir($fullDir . "file");
        }
        list($fileType, $file) = explode(';', $file);
        list(, $file) = explode(',', $file);
        $file = base64_decode($file);

        if ($type == 'image') {
            $fileType = explode("image/", $fileType);
            $exe = strtolower($fileType[1] ?? "");

            $img = \Image::make($file);
            $size = $img->filesize();
            if ($size > 400000) {
                $img->resize(1500, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            $fileName = uniqid() . "." . $exe;
            $img->save($fullDir . $fileName);
            return [
                "dir" => url('/') .'/'. $fullDir,
                "file_name" => $fileName
            ];

        } elseif ($type == 'pdf') {
            $exe = '';
            if ($fileType == 'data:application/pdf') {
                $exe = 'pdf';
            }

        } elseif ($type == 'docx') {
            $exe = '';
            if ($fileType == 'data:"application/octet-stream"') {
                $exe = 'docx';
            }

        } elseif ($type == 'excel') {
            $exe = '';
            if ($fileType == 'data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                $exe = 'xlsx';
            } elseif ($fileType == 'data:text/csv') {
                $exe = 'xlsx';
            } elseif ($fileType == 'data:application/octet-stream') {
                $exe = 'xls';
            } elseif ($fileType == 'data:application/vnd.ms-excel') {
                $exe = 'xls';
            }

        } elseif ($type == '3DS') {
            $exe = '';
            if ($fileType == 'data:application/3DS') {
                $exe = '3DS';
            }

        } elseif ($type == 'attachment') {
            $exe = '';
            if ($fileType == 'data:application/pdf') {
                $exe = 'pdf';
            } elseif ($fileType == 'data:"application/octet-stream"' ||$fileType = 'data:application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                $exe = 'docx';
            }
            elseif ($fileType == 'data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                $exe = 'xlsx';
            } elseif ($fileType == 'data:text/csv') {
                $exe = 'xlsx';
            } elseif ($fileType == 'data:application/octet-stream') {
                $exe = 'xls';
            } elseif ($fileType == 'data:application/vnd.ms-excel') {
                $exe = 'xls';
            } elseif ($fileType == 'data:application/3DS') {
                $exe = '3DS';
            } elseif ($fileType == 'application/x-zip-compressed') {
                $exe = 'zip';
            }elseif ($fileType == 'data:"application/octet-stream"') {
                $exe = 'docx';
            }elseif ($fileType == 'data:application/vnd.openxmlformats-officedocument.wordprocessingml.document"') {
                $exe = 'docx';
            }
        }

        if (empty($exe)) {
            return [
                "status" => false,
                "message" => "File type not Supported",
                "code" => 203,
            ];
        }

        $fileName = uniqid() . "." . $exe;
        file_put_contents($fullDir . $fileName, $file);

        return [
            "dir" => url('/') .'/'. $fullDir,
            "file_name" => $fileName
        ];
    }

    public function uploadImage($file, $dir, $exe)
    {
        $fullDir = 'uploads/'.$dir;
        if (!file_exists($fullDir)) {
            createDir($fullDir . "file");
        }
        $img = \Image::make($file);
        //save image to directory
        $fileName = uniqid() . "." . $exe;
        $img->save($fullDir . $fileName);
        return [
            "status" => true,
            "dir" => url('/') . $fullDir,
            "file_name" => $fileName
        ];
    }


    public function removeFile($dir ,$fileName)
    {
        $fullDir = "uploads/". $dir;
        $disk = Storage::build([
            'driver' => 'public_uploads',
            'root' => $fullDir,
        ]);
        if($disk->exists($fileName)){
            $disk->delete($fileName);
            return [
                "status" => true,
                "message" => 'File Deleted Successflly'
            ];
        }else{
            throw new NotFoundHttpException('File Not Exist' ,500);
        }
    }

}
