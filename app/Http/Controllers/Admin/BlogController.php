<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create() {
        return view('admin.blogs.create');
    }

    public function store(BlogRequest $blogRequest) {
        $attributes = $blogRequest->validated();

        if ($blogRequest->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $blogRequest->file('image')->getClientOriginalName();
            $imagePath = $blogRequest->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = $imagePath;
        }

        Blog::create($attributes);

        $message = array('message' => 'Blog Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.blogs.index')->with($message);
    }

    public function edit(Blog $blog) {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(BlogRequest $blogRequest, Blog $blog) {
        $attributes = $blogRequest->validated();

        if ($blogRequest->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $blogRequest->file('image')->getClientOriginalName();
            $imagePath = $blogRequest->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = $imagePath;
        } else {
            $attributes['image'] = $blog->image;
        }

        $blog->update($attributes);

        $message = array('message' => 'Blog Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.blogs.index')->with($message);
    }

    public function destroy(Blog $blog) {
        $blog->delete();

        $message = array('message' => 'Blog Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.blogs.index')->with($message);
    }
}
