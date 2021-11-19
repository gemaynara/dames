<?php

namespace App\Helpers;

use App\Arquivo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Helper
{
    public static function uploadImage($file, $disk = 'imagens')
    {
        $extensions = ['jpg', 'jpeg', 'png']; // all extension type for images

        $isImage = $file->getClientOriginalExtension();
        if (!in_array($isImage, $extensions)) {
            return false;
        }

        $fileName = time() . '-' . $file->hashName();

        $upload = Storage::disk($disk)->put($fileName, File::get($file));
        if ($upload) {
            return $fileName;
        }
        return false;

    }

    public static function uploadFile($file)
    {
        $extensions = ['pdf'];

        $isFile = $file->getClientOriginalExtension();
        if (!in_array($isFile, $extensions)) {
            return false;
        }

        $fileName =  $file->hashName();

        $path = "arquivos/" . time() . "/" . $fileName;

        if (Storage::disk('uploads')->put($path, File::get($file))) {
            $data['nome_arquivo'] = $fileName;
            $data['caminho'] = $path;
            $data['tamanho'] = $file->getSize();
            $data['formato'] = $file->getClientMimeType();

            return $data;
        }
        return false;

    }

}
