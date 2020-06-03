<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\BloodGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodGroupController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $bloodgroups = BloodGroup::all();
        return view('pages.blood_group', compact('user', 'appointmentCount', 'bloodgroups'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'blood_group' => 'required',
        ]);

        $blood_group = new BloodGroup();
        $blood_group->blood_group = $request->blood_group;
        $blood_group->status = $request->status;
        $blood_group->save();
        return redirect()->back()->with('info', 'Blood Group created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'blood_group' => 'required',
        ]);

        $blood_group = BloodGroup::find($request->blood_group_id);
        $blood_group->blood_group = $request->blood_group;
        $blood_group->status = $request->status;
        $blood_group->update();
        return redirect()->back()->with('info', 'Blood Group saved successfully.');
    }

    public function delete(Request $request)
    {
        $blood_group = BloodGroup::find($request->blood_group_id);
        $blood_group->delete();
        return redirect()->back()->with('error', 'Blood Group deleted successfully.');
    }
}
