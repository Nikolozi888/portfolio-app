<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageInfoRequest;
use App\Models\MessageInfo;

class MessageInfoController extends Controller
{
    public function index()
    {
        $infos = MessageInfo::all();

        return view('admin.messageInfo.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.messageInfo.create');
    }

    public function store(MessageInfoRequest $request)
    {
        $attributes = $request->validated();

        MessageInfo::create($attributes);

        $message = array('message' => 'Message Information Created Successfully', 'type' => 'success');
        return redirect()->route('admin.messageInfo.index')->with($message);
    }

    public function edit($id)
    {
        $info = MessageInfo::find($id);

        return view('admin.messageInfo.edit', compact('info'));
    }

    public function update(MessageInfoRequest $request, $id)
    {
        $info = MessageInfo::find($id);

        $attributes = $request->validated();


        $info->update($attributes);

        $message = array('message' => 'Message Information Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.messageInfo.index')->with($message);
    }

    public function destroy($id)
    {
        MessageInfo::find($id)->delete();

        $message = array('message' => 'Message Information Deleted Successfully', 'type' => 'success');
        return redirect()->route('admin.messageInfo.index')->with($message);
    }
}
