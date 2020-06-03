<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        $appointmentCount = Appointment::all()->count();

        $roles = Role::all();

        return view('pages.role', compact('user', 'roles', 'appointmentCount'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->status = $request->status;
        $role->description = $request->description;

        $role->save();
        return redirect()->back()->with('info', 'Role created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $role = Role::find($request->role_id);
        $role->name = $request->name;
        $role->status = $request->status;
        $role->description = $request->description;

        $role->update();
        return redirect()->back()->with('info', 'Role saved successfully.');
    }

    public function delete(Request $request)
    {
        $role = Role::find($request->role_id);
        $role->delete();
        return redirect()->back()->with('error', 'Role deleted successfully.');
    }
}
