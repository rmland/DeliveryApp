<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        $roles = Role::paginate(10);

        return view('role.index', compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * $roles->perPage());
    }
    public function create(): View
    {
        $role = new Role();

        return view('role.create', compact('role'));
    }
    public function store(RoleRequest $request): RedirectResponse
    {
        Role::create($request->validated());

        return Redirect::route('roles.index')
            ->with('success', 'Role created successfully.');
    }
    public function show($id): View
    {
        $role = Role::find($id);

        return view('role.show', compact('role'));
    }
    public function edit($id): View
    {
        $role = Role::find($id);

        return view('role.edit', compact('role'));
    }
    public function update(RoleRequest $request, Role $role): RedirectResponse
    {
        $role->update($request->validated());

        return Redirect::route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Role::find($id)->delete();

        return Redirect::route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
