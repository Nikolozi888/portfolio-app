<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddressInfoRequest;
use App\Models\AddressInfo;

class AddressInfoController extends Controller
{
    public function index()
    {
        $infos = AddressInfo::all();

        return view('admin.addressInfo.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.addressInfo.create');
    }

    public function store(AddressInfoRequest $request)
    {
        $attributes = $request->validated();

        AddressInfo::create($attributes);

        $message = array('message' => 'Address Information Created Successfully', 'type' => 'success');
        return redirect()->route('admin.addressInfo.index')->with($message);
    }

    public function edit($id)
    {
        $info = AddressInfo::find($id);

        return view('admin.addressInfo.edit', compact('info'));
    }

    public function update(AddressInfoRequest $request, $id)
    {
        $info = AddressInfo::find($id);

        $attributes = $request->validated();


        $info->update($attributes);

        $message = array('message' => 'Address Information Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.addressInfo.index')->with($message);
    }

    public function destroy($id)
    {
        AddressInfo::find($id)->delete();

        $message = array('message' => 'Address Information Deleted Successfully', 'type' => 'success');
        return redirect()->route('admin.addressInfo.index')->with($message);
    }
}
