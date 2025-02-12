<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Partners;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partners::all();

        return view('admin.partners.index', compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerRequest $request)
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

        Partners::create($attributes);

        $message = array('message' => 'Partner Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.index')->with($message);
    }

    public function edit(Partners $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, Partners $partner)
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

        if (!empty($gallery_images)) {
            $attributes['images'] = implode(',', $gallery_images);
        } else {
            $attributes['images'] = $partner->images;
        }
        $partner->update($attributes);

        $message = array('message' => 'Partner Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.index')->with($message);
    }

    public function destroy(Partners $partner)
    {
        $partner->delete();

        $message = array('message' => 'Partner Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.index')->with($message);
    }
}
