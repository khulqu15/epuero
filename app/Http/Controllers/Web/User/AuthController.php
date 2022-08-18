<?php

namespace App\Http\Controllers\Web\User;

use App\Actions\User\AuthAction;
use App\Actions\User\UserAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(UserAction $action): RedirectResponse
    {
        $action->create();
        return redirect()->route('login')->with('notification', 'Registration Successfully');
    }

    public function login(AuthAction $action): RedirectResponse
    {
        $data = $action->login();
        var_dump($data);
        return redirect()->route('app.home')->with(['notification', 'Login Success', 'data'=>$data]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    // public function updateProfile(UserAction $action, User $user): RedirectResponse
    // {
    //     $action->update($user);
    //     return redirect()->
    // }
}
