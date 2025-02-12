<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $attributes = $request->validated();

        Category::create($attributes);

        $message = array('message' => 'Category Created Successfully', 'type' => 'success');
        return redirect()->route('admin.categories.index')->with($message);
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $attributes = $request->validated();

        $category->update($attributes);

        $message = array('message' => 'Category Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.categories.index')->with($message);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        $message = array('message' => 'Category Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.categories.index')->with($message);
    }
}
