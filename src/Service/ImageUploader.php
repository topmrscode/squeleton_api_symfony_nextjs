<?php

namespace App\Service;

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
    public function uploadImageToCloudinary(UploadedFile $file)
    {
        $fileName = $file->getRealPath();

        // configure programatically
        Configuration::instance([
            'cloud' => [
                'cloud_name' => $_SERVER['CLOUD_NAME'],
                'api_key' =>  $_SERVER['API_KEY'],
                'api_secret' => $_SERVER['API_SECRET']
            ],
            'url' => [
                'secure' => true
            ]
        ]);

        $imageUploaded = (new UploadApi())->upload($fileName, [
            'folder' => 'symfony-listing',
            'width' => 200,
            'height' => 200
        ]);

        return $imageUploaded['secure_url'];
    }
}
