<?php

namespace App\Utils;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageUpload
{
     /*  Str::uuid().date('Y-m-d') . '.' . $request->extension(); 
    class str:: bydeny id bs kebier shiwya 3ashan asamy el sowarr mayhslhash over write mohem */

   /* hanst2bel kol el hagat de mohem */
    public static function uploadImage($request,$height=null,$width=null,$path=null){
        $imagename =Str::uuid().date('Y-m-d') . '.' . $request->extension();
        [$widthDefault, $heightDefault] = getimagesize($request);
        $height = $height ?? $heightDefault;
        $width = $width ?? $widthDefault;
        $image = Image::make($request->path());
        $image->fit($width, $height, function ($constraint) {
            $constraint->upsize();
        })->stream();
        Storage::disk('images')->put($path.$imagename, $image);
        return $path.$imagename;
    }
}

