<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Contracts\Repositories\ServiceRepositoryInterface;
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
    public function __construct(
        public AboutRepositoryInterface $aboutRepository,
        public ServiceRepositoryInterface $serviceRepository,
    )
    {}

    public function index() {
        $about = $this->aboutRepository->getAbout();
        $services = $serviceRepository->getAllServices();
        $feedbacks = Feedback::all();
        $blogs = Blog::all();

        return view('user.about', compact('about', 'services', 'feedbacks', 'blogs'));
    }

}
