<?php

namespace App\Traits;

use Image;
use Illuminate\Support\Facades\File;

trait UploadTrait
{

  public function uploadAllTyps($file, $directory, $width = null, $height = null)
  {
    if (!File::isDirectory('storage/images/' . $directory)) {
      File::makeDirectory('storage/images/' . $directory, 0777, true, true);
    }

    $fileMimeType = $file->getClientmimeType();
    $imageCheck = explode('/', $fileMimeType);

    if ($imageCheck[0] == 'image') {
      $allowedImagesMimeTypes = ['image/jpeg', 'image/jpg', 'image/png'];
      if (!in_array($fileMimeType, $allowedImagesMimeTypes))
        return 'default.png';

      return $this->uploadeImage($file, $directory, $width, $height);
    }

    $allowedMimeTypes = ['application/pdf', 'application/msword', 'application/excel', 'application/vnd.ms-excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/octet-stream'];
    if (!in_array($fileMimeType, $allowedMimeTypes))
      return  'default.png';

    return $this->uploadFile($file, $directory);
  }

  public function uploadFile($file, $directory): string
  {
    $filename = time() . rand(1000000, 9999999) . '.' . $file->getClientOriginalExtension();
    $path = 'images/' . $directory;
    $file->storeAs($path, $filename);
    return $filename;
  }

  public function uploadeImage($file, $directory, $width = null, $height = null)
  {
    if (!File::isDirectory('uploads/images/' . $directory)) {
      File::makeDirectory('uploads/images/' . $directory, 0777, true, true);
    }
    $img        = Image::make($file)->orientate();
    $thumbsPath = 'uploads/images/' . $directory;
    $name       = time() . '_' . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();

    if (null != $width && null != $height)
      $img->resize($width, $height, function ($constraint) {
        $constraint->aspectRatio();
      });

    $img->save($thumbsPath . '/' . $name);
    return (string) $name;
  }

  public function deleteFile($file_name, $directory = 'unknown'): void
  {
    if ($file_name && $file_name != 'default.png' && file_exists("storage/images/$directory/$file_name")) {
      unlink("storage/images/$directory/$file_name");
    }
  }

  public function defaultImage($directory): string
  {
    return asset("/uploads/images/$directory/default.png");
  }

  public static function getImage($name, $directory): string
  {
    return asset("uploads/images/$directory/" . $name);
  }

  /**
   * Uploads document to the server if present in the request
   *
   * @param  obj  $request, string $file_name, string dir_name
   * @return string
   */
  public function erpUploadFile($file, $directory)
  {
    //If app environment is demo return null
    if (config('app.env') == 'demo') {
      return null;
    }

    if (!File::isDirectory('storage/images/' . $directory)) {
      File::makeDirectory('storage/images/' . $directory, 0777, true, true);
    }

    $uploaded_file_name = null;
    if ($file->isValid()) {

      $fileMimeType = $file->getClientmimeType();
      $fileType = explode('/', $fileMimeType);
      if ($fileType[0] == 'image') {
        if (strpos($fileMimeType, 'image/') === false) {
          throw new \Exception('Invalid image file');
        }
      }

      if ($fileType[0] == 'document') {
        if (!in_array($fileMimeType, array_keys(config('constants.document_upload_mimes_types')))) {
          throw new \Exception('Invalid document file');
        }
      }

      if ($file->getSize() <= config('constants.document_size_limit')) {
        $new_file_name = time() . '_' . $file->getClientOriginalName();
        if ($file->storeAs($directory, $new_file_name)) {
          $uploaded_file_name = $new_file_name;
        }
      }
    }

    return $uploaded_file_name;
  }
}
