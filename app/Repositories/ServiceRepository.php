<?php

namespace App\Repositories;

use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Models\Service;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function getAllServices()
    {
        return Service::all();
    }

    public function getServicesWithCount($amount = 5)
    {
        return Service::latest()->take($amount)->get();
    }

    public function getServiceById($id)
    {
        return Service::findOrFail($id);
    }

    public function createService($data)
    {
        Service::create($data);
    }

    public function updateService($model, $data)
    {
        $model->update($data);
    }

    public function deleteService($model)
    {
        $model->delete();
    }
}
