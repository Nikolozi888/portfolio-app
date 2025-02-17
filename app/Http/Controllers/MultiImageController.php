<?php

namespace App\Http\Controllers;

use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MultiImageController extends Controller
{

    public function index()
    {
        $multiImages = MultiImage::first();

        return view('admin.feedbacks.multiImage.index', compact('multiImages'));
    }

    public function create()
    {
        return view('admin.feedbacks.multiImage.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'images' => 'nullable'
        ]);

        $current_timestamp = Carbon::now()->timestamp;

        $gallery_images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');
                $gallery_images[] = 'storage/' . $path;
            }
        }

        $attributes['images'] = implode(',', $gallery_images);

        MultiImage::create($attributes);

        $message = array('message' => 'MultiImage Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.multiImage.index')->with($message);
    }

    public function edit($id) {
        $multiImages = MultiImage::find($id);
        return view('admin.feedbacks.multiImage.edit', compact('multiImages'));
    }

    public function update(Request $request, $id)
    {

        $multiImage = MultiImage::find($id);

        $attributes = $request->all();

        $current_timestamp = Carbon::now()->timestamp;

        $gallery_images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');
                $gallery_images[] = 'storage/' . $path;
            }
        }

        if (!empty($gallery_images)) {
            $attributes['images'] = implode(',', $gallery_images);
        } else {
            $attributes['images'] = $multiImage->images;
        }
        $multiImage->update($attributes);

        $message = array('message' => 'Images Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.multiImage.index')->with($message);
    }

    public function destroy($id)
    {
        MultiImage::find($id)->delete();

        $message = array('message' => 'Images Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.multiImage.index')->with($message);
    }
}
