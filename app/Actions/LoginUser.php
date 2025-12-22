<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUser
{
    public function handle($attributes): bool
    {
        if (Auth::attempt($attributes)) {
            session()->regenerate();
            return true;
        }

        return false;
    }
}
