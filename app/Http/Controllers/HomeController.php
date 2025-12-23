<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Models\About;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Information;
use App\Models\Partners;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        public AboutRepositoryInterface $aboutRepository,
        public BlogRepositoryInterface $blogRepository,
        public ServiceRepositoryInterface $serviceRepository,
    )
    {}

    public function index() {

        $userInfo = Information::first();
        $about = $this->aboutRepository->getAbout();
        $services = $this->serviceRepository->getServicesWithCount(5);
        $portfolios = Portfolio::all();
        $partners = Partners::all();
        $feedbacks = Feedback::all();
        $blogs = $this->blogRepository->getCountedBlogs(3);

        return view('user.home', compact('userInfo', 'about', 'services', 'portfolios', 'partners', 'feedbacks', 'blogs'));
    }


}
