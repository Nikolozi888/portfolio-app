<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $blogs = $category->posts()->paginate(5);

        return view('user.blog.index', [
            'blogs' => $blogs,
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

}
