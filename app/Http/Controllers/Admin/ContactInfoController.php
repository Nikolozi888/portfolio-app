<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactInfoRequest;

class ContactInfoController extends Controller
{
    public function index()
    {
        $infos = ContactInfo::all();

        return view('admin.contactInfo.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.contactInfo.create');
    }

    public function store(ContactInfoRequest $request)
    {
        $attributes = $request->validated();

        ContactInfo::create($attributes);

        $message = array('message' => 'Contact Us Information Created Successfully', 'type' => 'success');
        return redirect()->route('admin.contactInfo.index')->with($message);
    }

    public function edit($id)
    {
        $info = ContactInfo::find($id);

        return view('admin.contactInfo.edit', compact('info'));
    }

    public function update(ContactInfoRequest $request, $id)
    {
        $info = ContactInfo::find($id);

        $attributes = $request->validated();


        $info->update($attributes);

        $message = array('message' => 'Contact Us Information Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.contactInfo.index')->with($message);
    }

    public function destroy($id)
    {
        ContactInfo::find($id)->delete();

        $message = array('message' => 'Contact Us Information Deleted Successfully', 'type' => 'success');
        return redirect()->route('admin.contactInfo.index')->with($message);
    }
}
