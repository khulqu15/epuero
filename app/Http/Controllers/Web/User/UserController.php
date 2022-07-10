<?php

namespace App\Http\Controllers\Web\User;

use App\Actions\User\UserAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        $users = User::query();
        return Inertia::render($this->component('Index'), [
            'users' => $users->paginate(10),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render($this->component('Create'));
    }

    public function store(UserAction $action): RedirectResponse
    {
        $action->create();
        return redirect()->route('app.user.index');
    }

    public function show(User $user): Response
    {
        return Inertia::render($this->component('Show'), [
            'user' => $user,
        ]);
    }

    public function edit(User $user): Response
    {
        return Inertia::render($this->component('Edit'), [
            'user' => $user,
        ]);
    }

    public function update(UserAction $action, User $user): RedirectResponse
    {
        $action->update($user);
        return redirect()->route('app.user.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('app.user.index');
    }

    protected function component(string $name): string
    {
        return 'App/User/'.$name;
    }
}
