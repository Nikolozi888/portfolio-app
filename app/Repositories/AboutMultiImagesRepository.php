<?php

namespace App\Repositories;

use App\Contracts\Repositories\AboutMultiImagesRepositoryInterface;
use App\Models\AboutMultiImages;

class AboutMultiImagesRepository implements AboutMultiImagesRepositoryInterface
{
    public function getAllImages()
    {
        return AboutMultiImages::all();
    }

    public function createImage($path)
    {
        AboutMultiImages::create([
            'image' => 'storage/' . $path,
        ]);
    }

    public function findImage($id): AboutMultiImages
    {
        return AboutMultiImages::find($id);
    }

    public function updateImage($model, $data)
    {
        $model->update($data);
    }
    
    public function deleteImage($model)
    {
        $model->delete();
    }
}
