<?php

namespace App\Http\Controllers\Api\User;

use App\Actions\User\AuthAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthAction $action): JsonResponse
    {
        $login = $action->login();
        if($login != null) {
            $user = Auth::user();
            $token = User::query()->find($user->id)->createToken('authentification')->plainTextToken;
            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
        }
        return response()->json([
            'msg' => 'Login Failed'
        ]);
    }
}
