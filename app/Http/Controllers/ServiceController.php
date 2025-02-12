<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('user.service_show', compact('service'));
    }

}
