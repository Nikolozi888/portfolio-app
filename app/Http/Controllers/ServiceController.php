<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Models\About;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(
        public ServiceRepositoryInterface $serviceRepository
    )
    {}
    public function show($id)
    {
        $service = $this->serviceRepository->getServiceById($id);

        return view('user.service_show', compact('service'));
    }

}
