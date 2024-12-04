<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controller;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        if ($request->input('search')) {
            $search = $request->input('search');
            $users = User::where('name', 'LIKE', "%" . $search . "%")->orwhere('email', 'LIKE', "%" . $search . "%")->orWhere('id',$search)->paginate(10);
            return view('user.index', compact('users'))
                ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
        }

        $users = User::paginate(10);

        return view('user.index', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
    }
    public function create(): View
    {
        $user = new User();

        return view('user.create', compact('user'));
    }
    public function store(UserRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return Redirect::route('users.index')
            ->with('success', 'User created successfully.');
    }
    public function show($id): View
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }
    public function edit($id): View
    {
        $rol = Role::where('');
        $user = User::find($id);

        return view('user.edit', compact('user', 'rol'));
    }
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        if ($request->input('rol')) {
            $rol = $request->input('rol');

            $oldRole = $user->getRoleNames()->first();

            if ($oldRole) {
                $user->removeRole($oldRole);
            }
            $user->assignRole($rol);
        }

        return Redirect::route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();

        return Redirect::route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
