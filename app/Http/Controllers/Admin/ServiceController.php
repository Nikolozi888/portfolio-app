<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        }

        Service::create($attributes);

        $message = array('message' => 'Service Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.services.index')->with($message);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $service->image;
        }

        $service->update($attributes);

        $message = array('message' => 'Service Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.services.index')->with($message);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        $message = array('message' => 'Service Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.services.index')->with($message);
    }
}
