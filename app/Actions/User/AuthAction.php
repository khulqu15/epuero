<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAction
{
    protected array $inputs;
    protected mixed $user;

    public function __construct(protected Request $request) {
        $this->inputs = $this->request->validate([
            'email' => 'required|max:100',
            'password' => 'required|min:8',
            'remember' => 'required'
        ]);
    }

    public function login(): User|null
    {
        $fieldType = filter_var($this->inputs['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(Auth::attempt([
            $fieldType => $this->inputs['email'],
            'password' => $this->inputs['password']
        ], $this->inputs['remember'])) {
            $user = User::query()->find(Auth::id());
            return $user;
        }
        return null;
    }

}
