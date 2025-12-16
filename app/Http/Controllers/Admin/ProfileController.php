<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit() {
        $user = User::find(current_user()->id);

        return view('admin.profile.edit_profile',compact('user'));
    }

    public function update(AdminProfileRequest $request, $id) {
        $user = User::find($id);

        $attributes = $request->validated();

        $user->update($attributes);

        $message = array('message' => 'Profile Updated Successfully', 'type' => 'success');

        return redirect()->route('admin.index')->with($message);
    }
}
