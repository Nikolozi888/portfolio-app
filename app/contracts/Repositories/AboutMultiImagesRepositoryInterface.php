<?php

namespace App\Contracts\Repositories;

use App\Models\AboutMultiImages;

interface AboutMultiImagesRepositoryInterface
{
    public function getAllImages();
    public function createImage($path);
    public function findImage($id): AboutMultiImages;
    public function updateImage($model, $data);
    public function deleteImage($model);
}
