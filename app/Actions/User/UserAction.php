<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Http\Request;

class UserAction
{
    protected array $inputs;
    protected mixed $user;

    public function __construct(protected Request $request) {
        $this->inputs = $this->request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|unique:users,username|max:160',
            'email' => 'required|unique:users,email|max:160',
            'role' => 'required',
            'identity' => 'required|unique:users,identity|max:100',
            'phone_number' => 'required|unique:users,phone_number|max:100',
            'password' => 'required|min:8',
        ]);
    }

    public function create(): User
    {
        $user = new User();
        $user->identity = $this->inputs['identity'];
        $user->role = $this->inputs['role'];
        $user->name = $this->inputs['name'];
        $user->username = $this->inputs['username'];
        $user->email = $this->inputs['email'];
        $user->phone_number = $this->inputs['phone_number'];
        $user->password = $this->inputs['password'];
        $user->save();

        return $user;
    }

    public function update(User $user): User
    {
        $user->identity = $this->inputs['identity'];
        $user->name = $this->inputs['name'];
        $user->role = $this->inputs['role'];
        $user->username = $this->inputs['username'];
        $user->email = $this->inputs['email'];
        $user->phone_number = $this->inputs['phone_number'];
        $user->password = $this->inputs['password'];
        $user->save();

        return $user;
    }

    public function add_relation(User $user): User
    {
        // add relation code, see stackoverflow
        return $user;
    }
}
