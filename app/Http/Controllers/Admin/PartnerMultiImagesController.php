<?php

namespace App\Http\Controllers\Admin;

use App\Actions\GetMultiImagePath;
use App\Models\PartnerMultiImages;
use App\Models\Partners;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerMultiImagesRequest;

class PartnerMultiImagesController extends Controller
{
    public function index()
    {
        $multiImages = PartnerMultiImages::all();

        return view('admin.partners.multiImage.index', compact('multiImages'));
    }

    public function create()
    {
        return view('admin.partners.multiImage.create');
    }

    public function store(PartnerMultiImagesRequest $request, GetMultiImagePath $getMultiImagePath)
    {
        $attributes = $request->validated();

        if ($request->hasFile('images')) {
            $current_timestamp = Carbon::now()->timestamp;

            foreach ($request->file('images') as $index => $file) {
                $path = $getMultiImagePath->handle($current_timestamp, $index, $file);
                PartnerMultiImages::create([
                    'image' => 'storage/' . $path,
                ]);
            }
        }

        $message = array('message', 'MultiImage Created Successfully', 'type' => 'success');

        return redirect()->route('admin.partners.multiImage.index');
    }


    public function edit($id)
    {
        $multiImage = PartnerMultiImages::find($id);
        return view('admin.partners.multiImage.edit', compact('multiImage'));
    }

    public function update(PartnerMultiImagesRequest $request, $id)
    {
        $attributes = $request->validated();
        
        $image = PartnerMultiImages::find($id);

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $image->image;
        }

        $image->update($attributes);

        $message = array('message' => 'MultiImage Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.partners.multiImage.index')->with($message);
    }


    public function destroy($id)
    {
        PartnerMultiImages::find($id)->delete();

        $message = array('message' => 'Images Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.multiImage.index')->with($message);
    }
}
