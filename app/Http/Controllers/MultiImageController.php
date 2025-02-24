<?php

namespace App\Http\Controllers;

use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MultiImageController extends Controller
{

    public function index()
    {
        $multiImages = MultiImage::all();

        return view('admin.feedbacks.multiImage.index', compact('multiImages'));
    }

    public function create()
    {
        return view('admin.feedbacks.multiImage.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'images' => 'required'
        ]);

        $current_timestamp = Carbon::now()->timestamp;

        if ($request->hasFile('images')) {
            $current_timestamp = Carbon::now()->timestamp;

            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');

                MultiImage::create([
                    'image' => 'storage/' . $path,
                ]);
            }
        }

        $message = array('message' => 'MultiImage Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.multiImage.index')->with($message);
    }

    public function edit($id)
    {
        $multiImage = MultiImage::find($id);
        return view('admin.feedbacks.multiImage.edit', compact('multiImage'));
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'image' => 'required',
        ]);

        $current_timestamp = Carbon::now()->timestamp;

        $image = MultiImage::find($id);

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $image->image;
        }

        $image->update($attributes);

        $message = array('message' => 'Image Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.multiImage.index')->with($message);
    }

    public function destroy($id)
    {
        MultiImage::find($id)->delete();

        $message = array('message' => 'Images Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.multiImage.index')->with($message);
    }
}
