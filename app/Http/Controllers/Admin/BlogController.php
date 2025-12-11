<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\BlogRepositoryInterface;
use App\DTOs\BlogDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(
        public BlogRepositoryInterface $blogRepository,
    )
    {}

    public function index() {
        $blogs = $this->blogRepository->getAllBlog();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create() {
        return view('admin.blogs.create');
    }

    public function store(BlogRequest $blogRequest) {

        $data = $blogRequest->validated();

        if ($blogRequest->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $blogRequest->file('image')->getClientOriginalName();
            $imagePath = $blogRequest->file('image')->storeAs('images', $uniqueName, 'public');
            $data['image'] = $imagePath;
        } else {
            $data['image'] = null;
        }

        $blogDTO = BlogDTO::fromArray($data);

        $this->blogRepository->createBlog($blogDTO->toArray());

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

        $blogDTO = BlogDTO::fromArray($attributes);

        $this->blogRepository->updateBlog($blog, $blogDTO->toArray());

        $message = array('message' => 'Blog Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.blogs.index')->with($message);
    }

    public function destroy(Blog $blog) {

        $this->blogRepository->deleteBlog($blog);

        $message = array('message' => 'Blog Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.blogs.index')->with($message);
    }
}
