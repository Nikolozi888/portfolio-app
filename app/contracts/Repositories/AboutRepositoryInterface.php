<?php

namespace App\Contracts\Repositories;

use App\Models\About;

interface AboutRepositoryInterface
{
    public function getAbout(): About;
    public function createAbout($attributes);
    public function findAbout($id): About;
    public function updateAbout($model, $attributes);
    public function deleteAbout($model);
}
