<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(
        public BlogRepositoryInterface $blogRepository,
    )
    {}

    public function index(Request $request)
    {
        $search = $request->input('search');

        $blogs = $this->blogRepository->getPaginatedBlogs($request, $search);
        $categories = Category::all();
        $tags = Tag::all();

        return view('user.blog.index', compact('blogs', 'categories', 'tags', 'search'));
    }



    public function show($slug)
    {
        $blog = $this->blogRepository->showBlog($slug);
        $blogs = $this->blogRepository->showBlogs($blog);

        $tags = Tag::all();
        $categories = Category::all();

        $previous = $this->blogRepository->previousBlog($blog);
        $next = $this->blogRepository->nextBlog($blog);


        return view('user.blog.show', compact('blog', 'tags', 'categories', 'previous', 'next', 'blogs'));
    }

}
