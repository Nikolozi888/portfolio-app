<?php

namespace App\Repositories;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogRepository implements BlogRepositoryInterface
{
    public function getAllBlog()
    {
        return Blog::all();
    }

    public function getCountedBlogs($count)
    {
        return Blog::latest()->take($count)->get();
    }

    public function getPaginatedBlogs(Request $request, $search)
    {
        return Blog::search($search)->paginate(5);
    }

    public function showBlog($slug): Blog
    {
        return Blog::where('slug', $slug)->firstOrFail();
    }

    public function showBlogs($blog)
    {
        return Blog::where('id', '!=', $blog->id)->get();
    }

    public function previousBlog($blog): Blog
    {
        return Blog::where('id', '<', $blog->id)->first();
    }

    public function nextBlog($blog): Blog
    {
        return Blog::where('id', '>', $blog->id)->first();
    }

    public function createBlog($attributes)
    {
        Blog::create($attributes);
    }

    public function updateBlog($model, $attributes)
    {
        $model->update($attributes);
    }

    public function deleteBlog($model)
    {
        $model->delete();
    }
}
