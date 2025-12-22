<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUser
{
    public function handle(Request $request, $attributes)
    {
        if (Auth::attempt($attributes)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }
    }
}
