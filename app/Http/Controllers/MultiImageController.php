<?php

namespace App\Http\Controllers;

use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MultiImageController extends Controller
{
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
        return redirect()->route('admin.feedbacks.index')->with($message);
    }
}
