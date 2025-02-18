<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LinkRequest;
use App\Models\Link;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();

        return view('admin.links.index', compact('links'));
    }

    public function create()
    {
        return view('admin.links.create');
    }

    public function store(LinkRequest $request)
    {
        $attributes = $request->validated();

        if ($request->hasFile('icon')) {
            $uniqueName = uniqid() . '-' . $request->file('icon')->getClientOriginalName();
            $imagePath = $request->file('icon')->storeAs('images', $uniqueName, 'public');
            $attributes['icon'] = 'storage/' . $imagePath;
        }

        Link::create($attributes);

        $message = array('message' => 'Link Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.links.index')->with($message);
    }


    public function edit($id)
    {
        $link = Link::find($id);

        return view('admin.links.edit', compact('link'));
    }

    public function update(LinkRequest $request, $id)
    {
        $link = Link::find($id);
        $attributes = $request->validated();

        if ($request->hasFile('icon')) {
            $uniqueName = uniqid() . '-' . $request->file('icon')->getClientOriginalName();
            $imagePath = $request->file('icon')->storeAs('images', $uniqueName, 'public');
            $attributes['icon'] = 'storage/' . $imagePath;
        } else {
            $attributes['icon'] = $link->icon;
        }

        $link->update($attributes);

        $message = array('message' => 'Link Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.links.index')->with($message);
    }

    public function destroy($id)
    {
        Link::find($id)->delete();

        $message = array('message' => 'Link Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.links.index')->with($message);
    }

}
