<?php
function changeSaveImage($photo, $photoName, $upload_dir)
{
    $extention = $photo->getClientOriginalExtension();
    $photo = \Intervention\Image\ImageManagerStatic::make($photo->getRealPath());
    $photo->resize(1024, null, function ($image) {
        $image->aspectRatio();
    });
    $photo->save(public_path() . "/upload/img/$upload_dir/$photoName." . $extention);
    return $photo->filename . '.' . $extention;
}