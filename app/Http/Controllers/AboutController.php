<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Information;
use App\Models\Partners;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index() {
        $about = About::firstOrFail();
        $services = Service::all();
        $feedbacks = Feedback::all();
        $blogs = Blog::all();

        return view('user.about', compact('about', 'services', 'feedbacks', 'blogs'));
    }

}
