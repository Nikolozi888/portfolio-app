<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\AboutMultiImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutMultiImagesRequest;

class AboutMultiImagesController extends Controller
{
    public function index()
    {
        $multiImages = AboutMultiImages::all();

        return view('admin.about.multiImage.index', compact('multiImages'));
    }

    public function create()
    {
        return view('admin.about.multiImage.create');
    }

    public function store(AboutMultiImagesRequest $request)
    {
        $attributes = $request->validated();

        $about = About::find($request->about_id);

        if ($request->hasFile('images')) {
            $current_timestamp = Carbon::now()->timestamp;

            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');

                AboutMultiImages::create([
                    'about_id' => $about->id,
                    'image' => 'storage/' . $path,
                ]);
            }
        }

        $message = array('message', 'MultiImage Created Successfully', 'type' => 'success');

        return redirect()->route('admin.about.multiImage.index');
    }


    public function edit($id)
    {
        $multiImage = AboutMultiImages::find($id);
        return view('admin.about.multiImage.edit', compact('multiImage'));
    }

    public function update(AboutMultiImagesRequest $request, $id)
    {
        $attributes = $request->validated();

        $image = AboutMultiImages::find($id);

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $image->image;
        }

        $image->update($attributes);

        $message = array('message' => 'MultiImage Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.about.multiImage.index')->with($message);
    }


    public function destroy($id)
    {
        AboutMultiImages::find($id)->delete();

        $message = array('message' => 'Images Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.about.multiImage.index')->with($message);
    }
}
