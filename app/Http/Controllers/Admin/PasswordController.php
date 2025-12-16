<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function edit()
    {
        $user = User::find(current_user()->id);

        return view('admin.profile.edit_password', compact('user'));
    }

    public function update(AdminPasswordRequest $request, $id)
    {
        $user = User::find($id);

        $attributes = $request->validated();

        if (!Hash::check($request->old_password, $user->password)) {
            $message = array('message' => 'Password Not Matched', 'type' => 'error');
            return redirect()->back()->with($message);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        $message = array('message' => 'Password Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.index')->with($message);
    }
}
