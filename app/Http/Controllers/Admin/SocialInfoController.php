<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SocialInfoRequest;
use App\Models\SocialInfo;

class SocialInfoController extends Controller
{
    public function index()
    {
        $infos = SocialInfo::all();

        return view('admin.socialInfo.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.socialInfo.create');
    }

    public function store(SocialInfoRequest $request)
    {
        $attributes = $request->validated();

        SocialInfo::create($attributes);

        $message = array('message' => 'Social Information Created Successfully', 'type' => 'success');
        return redirect()->route('admin.socialInfo.index')->with($message);
    }

    public function edit($id)
    {
        $info = SocialInfo::find($id);

        return view('admin.socialInfo.edit', compact('info'));
    }

    public function update(SocialInfoRequest $request, $id)
    {
        $info = SocialInfo::find($id);

        $attributes = $request->validated();


        $info->update($attributes);

        $message = array('message' => 'Social Information Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.socialInfo.index')->with($message);
    }

    public function destroy($id)
    {
        SocialInfo::find($id)->delete();

        $message = array('message' => 'Social Information Deleted Successfully', 'type' => 'success');
        return redirect()->route('admin.socialInfo.index')->with($message);
    }
}
