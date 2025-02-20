<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InformationRequest;
use App\Models\Information;
use App\Services\ImageService;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    protected $imageUpload;

    public function __construct(ImageService $imageUpload)
    {
        $this->imageUpload = $imageUpload;
    }


    public function index()
    {
        $information = Information::first();

        return view('admin.informations.index', compact('information'));
    }

    public function create()
    {
        return view('admin.informations.create');
    }

    public function store(InformationRequest $request)
    {
        $attributes = $request->validated();

        $imagePath = $this->imageUpload->upload($request);

        if ($imagePath) {
            $attributes['image'] = $imagePath;
        }

        Information::create($attributes);

        $message = array('message' => 'Information Created Successfully', 'type' => 'success');

        return redirect()->route('admin.informations.index')->with($message);
    }


    public function edit(Information $information)
    {
        return view('admin.informations.edit', compact('information'));
    }

    public function update(InformationRequest $request, Information $information)
    {

        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $information->image;
        }

        $message = array('message' => 'Information Updated SuccessFully', 'type' => 'success');
        $information->update($attributes);

        return redirect()->route('admin.informations.index')->with($message);

    }


    public function destroy(Information $information)
    {
        $information->delete();

        $message = array('message' => 'Information Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.informations.index')->with($message);
    }
}
