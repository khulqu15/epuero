<?php

namespace App\Http\Controllers\Web\Profile;

use App\Actions\User\UserAction;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
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
        return redirect()->route('app.profile.index');
    }

    public function show(User $user): Response
    {
        return Inertia::render($this->component('Show'), [
            'user' => $user,
        ]);
    }

    public function edit(): Response
    {
        return Inertia::render($this->component('Edit'));
    }

    public function update(): RedirectResponse
    {
        return redirect()->route('app.profile.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('app.profile.index');
    }

    public function addRelation(UserAction $action, User $user): RedirectResponse
    {
        $action->add_relation($user);
        return redirect()->route('app.profile.index');
    }

    protected function component(string $name): string
    {
        return 'App/Profile/'.$name;
    }
}
