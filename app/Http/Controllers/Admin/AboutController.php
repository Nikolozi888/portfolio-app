<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        $attributes = $request->validated();

        $current_timestamp = Carbon::now()->timestamp;

        $gallery_images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');
                $gallery_images[] = $path;
            }
        }

        $attributes['images'] = implode(',', $gallery_images);


        About::create($attributes);

        $message = array('message' => 'About Information Created Successfully', 'type' => 'success');

        return redirect()->route('admin.about.index')->with($message);
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        $about = About::findOrFail($id);

        $attributes = $request->validated();

        $current_timestamp = Carbon::now()->timestamp;

        $gallery_images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');
                $gallery_images[] = $path;
            }
        }

        if (!empty($gallery_images)) {
            $attributes['images'] = implode(',', $gallery_images);
        } else {
            $attributes['images'] = $about->images;
        }

        $about->update($attributes);

        $message = array('message' => 'About Information Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.about.index')->with($message);
    }



    public function destroy(About $about)
    {
        $about->delete();

        $message = array('message' => 'About Information Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.about.index')->with($message);
    }
}
