<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\AboutMultiImagesRepositoryInterface;
use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\AboutMultiImages;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\PartnerMultiImages;
use App\Models\Partners;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        public ServiceRepositoryInterface $serviceRepository,
        public BlogRepositoryInterface $blogRepository,
        public AboutMultiImagesRepositoryInterface $aboutMultiImagesRepository
    )
    {}

    public function index()
    {
        $emails = Contact::where('replied', 0)->get();
        $blogs = $this->blogRepository->getAllBlog();
        $categories = Category::all();
        $feedbacks = Feedback::all();
        $partners = Partners::all();
        $portfolios = Portfolio::all();
        $services = $this->serviceRepository->getAllServices();
        $tags = Tag::all();
        $aboutMultiImages = $this->aboutMultiImagesRepository->getAllImages();
        $partnerMultiImages = PartnerMultiImages::all();

        return view('admin.index', compact('blogs', 'categories', 'feedbacks', 'partners', 'portfolios', 'services', 'tags', 'aboutMultiImages', 'partnerMultiImages', 'emails'));
    }
}
