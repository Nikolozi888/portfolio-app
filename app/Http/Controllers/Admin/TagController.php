<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create() {
        return view('admin.tags.create');
    }

    public function store(TagRequest $tagRequest) {
        $attributes = $tagRequest->validated();

        Tag::create($attributes);

        $message = array('message' => 'Tag Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.tags.index')->with($message);
    }

    public function edit(Tag $tag) {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(TagRequest $tagRequest, Tag $tag) {
        $attributes = $tagRequest->validated();

        $tag->update($attributes);

        $message = array('message' => 'Tag Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.tags.index')->with($message);
    }

    public function destroy(Tag $tag) {
        $tag->delete();

        $message = array('message' => 'Tag Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.tags.index')->with($message);
    }
}
