<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $blogsQuery = Blog::query();

        if ($search) {
            $blogsQuery->where('title', 'like', '%' . $search . '%');
        }

        return view('user.blog.index', [
            'blogs' => $blogsQuery->paginate(5),
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'search' => $search,
        ]);
    }


    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::where('id', '!=', $blog->id)->get();

        $tags = Tag::all();
        $categories = Category::all();

        $previous = Blog::where('id', '<', $blog->id)->first();
        $next = Blog::where('id', '>', $blog->id)->first();


        return view('user.blog.show', compact('blog', 'tags', 'categories', 'previous', 'next', 'blogs'));
    }





}
