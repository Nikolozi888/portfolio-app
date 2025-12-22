<?php

namespace App\Http\Controllers;

use App\Actions\LoginUser;
use App\Actions\LogoutUser;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct(
        public LogoutUser $logoutUser,
        public LoginUser $loginUser,
    )
    {}
    public function create()
    {
        return view('sessions.create');
    }

    public function store(LoginRequest $request)
    {
        $attributes = $request->validated();

        if ($this->loginUser->handle($attributes)) {
            return redirect()->route('admin.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(Request $request)
    {
        $this->logoutUser->handle($request);

        return redirect()->route('home');
    }
}
