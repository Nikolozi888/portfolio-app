<?php

namespace App\Http\Controllers\Admin;

use App\Actions\GetMultiImagePath;
use App\Contracts\Repositories\AboutMultiImagesRepositoryInterface;
use App\Models\About;
use App\Models\AboutMultiImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutMultiImagesRequest;

class AboutMultiImagesController extends Controller
{
    public function __construct(
        public AboutMultiImagesRepositoryInterface $aboutMultiImagesRepository,
    )
    {}
    public function index()
    {
        $multiImages = $this->aboutMultiImagesRepository->getAllImages();

        return view('admin.about.multiImage.index', compact('multiImages'));
    }

    public function create()
    {
        return view('admin.about.multiImage.create');
    }

    public function store(AboutMultiImagesRequest $request, GetMultiImagePath $getMultiImagePath)
    {
        $attributes = $request->validated();

        if ($request->hasFile('images')) {
            $current_timestamp = Carbon::now()->timestamp;

            foreach ($request->file('images') as $index => $file) {
                $path = $getMultiImagePath->handle($current_timestamp, $index, $file);
                $this->aboutMultiImagesRepository->createImage($path);
            }
        }

        $message = 'MultiImage Created Successfully';
        return $this->successRedirect('admin.about.multiImage.index', $message);
    }


    public function edit($id)
    {
        $multiImage = $this->aboutMultiImagesRepository->findImage($id);
        return view('admin.about.multiImage.edit', compact('multiImage'));
    }

    public function update(AboutMultiImagesRequest $request, $id)
    {
        $attributes = $request->validated();

        $image = $this->aboutMultiImagesRepository->findImage($id);

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $image->image;
        }

        $this->aboutMultiImagesRepository->updateImage($image, $attributes);

        $message = 'MultiImage Updated Successfully';
        return $this->successRedirect('admin.about.multiImage.index', $message);
    }


    public function destroy($id)
    {
        $image = $this->aboutMultiImagesRepository->findImage($id);

        $this->aboutMultiImagesRepository->deleteImage($image);

        $message = 'Images Deleted SuccessFully';
        return $this->successRedirect('admin.about.multiImage.index', $message);
    }
}
