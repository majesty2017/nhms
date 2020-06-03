<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        $appointmentCount = Appointment::all()->count();

        $roles = Role::all();

        $categories = Category::all();

        $users = User::all();

        return view('pages.user', compact('user', 'roles', 'categories', 'users', 'appointmentCount'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric|min:10',
            'image' => 'mimes:jpeg,jpg,gif,png|max:8192',
            'dob' => 'required|date',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->role_id = $request->role;
        $user->category_id = $request->category;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->password = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/users/' . $request->name . '/', $filename);
            $user->image = $filename;
        }

        $user->save();
        return redirect()->back()->with('info', 'User created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric|min:10',
            'image' => 'mimes:jpeg,jpg,gif,png|max:8192',
            'role' => 'required',
        ]);

        $user = User::find($request->update_user_id);
        $user->name = $request->name;
        $user->role_id = $request->role;
        $user->category_id = $request->category;
        $user->phone = $request->phone;
        $user->status = $request->status;
//        $user->password = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/users/' . $request->name . '/', $filename);
            $user->image = $filename;
        }

        $user->update();
        return redirect()->back()->with('info', 'User saved successfully.');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->delete_user_id);
        $user->delete();
        return redirect()->back()->with('error', 'User deleted successfully.');
    }
}
