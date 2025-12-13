<?php

namespace App\Contracts\Repositories;

use App\Models\Blog;
use Illuminate\Http\Request;

interface BlogRepositoryInterface
{
    public function getAllBlog();
    public function getPaginatedBlogs(Request $request, $search);
    public function getCountedBlogs($count);
    public function showBlog($slug): Blog;
    public function showBlogs($blog);
    public function previousBlog($blog): Blog;
    public function nextBlog($blog): Blog;
    public function createBlog($attributes);
    public function updateBlog($model, $attributes);
    public function deleteBlog($model);
}
