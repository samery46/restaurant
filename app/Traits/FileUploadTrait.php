<?php

namespace App\Traits;

use Illuminate\Http\Request;
use File;
use phpDocumentor\Reflection\Types\Void_;

trait FileUploadTrait
{
    function uploadImage(Request $request, $inputName, $oldPath = Null, $path = "/uploads")
    {
        if ($request->hasFile($inputName)) {

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext; //image.ext

            $image->move(public_path($path), $imageName);

            // delete previous file id exist
            if ($oldPath && File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }
            return $path . '/' . $imageName;
        }
        return NULL;
    }

    /**
     * Remove File Image
     */

    function removeImage(string $path): void
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
