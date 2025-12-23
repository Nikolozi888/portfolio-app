<?php

namespace App\Contracts\Repositories;

interface ServiceRepositoryInterface
{
    public function getAllServices();
    public function getServicesWithCount($amount);
    public function getServiceById($id);
    public function createService($data);
    public function updateService($model, $data);
    public function deleteService($model);
}
