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
