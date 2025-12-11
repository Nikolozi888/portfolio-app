<?php

namespace App\Repositories;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Models\About;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Service;

class AboutRepository implements AboutRepositoryInterface
{
    public function getAbout(): About
    {
        return About::firstOrFail();
    }

    public function createAbout($attributes)
    {
        About::create($attributes);
    }

    public function findAbout($id): About
    {
        return About::findOrFail($id);
    }

    public function updateAbout($model, $attributes)
    {
        $model->update($attributes);
    }

    public function deleteAbout($model)
    {
        $model->delete();
    }
}
