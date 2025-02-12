<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Partners;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $blogs = Blog::all();
        $categories = Category::all();
        $feedbacks = Feedback::all();
        $partners = Partners::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $tags = Tag::all();

        return view('admin.index', compact('blogs', 'categories', 'feedbacks', 'partners', 'portfolios', 'services', 'tags'));
    }
}
