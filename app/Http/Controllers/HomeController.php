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

class HomeController extends Controller
{
    public function index() {

        $userInfo = Information::first();
        $about = About::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $partners = Partners::all();
        $feedbacks = Feedback::all();
        $blogs = Blog::latest()->take(3)->get();

        return view('user.home', compact('userInfo', 'about', 'services', 'portfolios', 'partners', 'feedbacks', 'blogs'));
    }


}
