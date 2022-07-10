<?php

namespace App\Http\Controllers\Web\User;

use App\Actions\User\AuthAction;
use App\Actions\User\UserAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function register(UserAction $action): RedirectResponse
    {
        $action->create();
        return redirect()->route('login')->with('notification', 'Registration Successfully');
    }

    public function login(AuthAction $action): RedirectResponse
    {
        $action->login();
        return redirect()->route('app.home')->with('notification', 'Login Success');
    }
}
