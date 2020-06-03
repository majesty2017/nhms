<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\BloodDonor;
use App\Models\BloodGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodDonorController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $blood_groups = BloodGroup::all();
        $blood_donors = BloodDonor::all();
        return view('pages.blood_donor', compact('user', 'appointmentCount', 'blood_groups', 'blood_donors'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'age' => 'required|numeric',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:blood_donors',
            'address' => 'required|string',
        ]);

        $donor = new BloodDonor();
        $donor->name = $request->name;
        $donor->blood_group_id = $request->blood_group;
        $donor->gender = $request->gender;
        $donor->age = $request->age;
        $donor->phone = $request->phone;
        $donor->email = $request->email;
        $donor->address = $request->address;
        $donor->status = $request->status;

        $donor->save();

        return redirect()->back()->with('info', 'Blood donor created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'age' => 'required|numeric',
            'phone' => 'required|numeric',
        ]);

        $donor = BloodDonor::find($request->update_donor_id);
        $donor->name = $request->name;
        $donor->blood_group_id = $request->blood_group;
        $donor->gender = $request->gender;
        $donor->age = $request->age;
        $donor->phone = $request->phone;
        $donor->status = $request->status;

        $donor->update();

        return redirect()->back()->with('info', 'Blood donor saved successfully.');
    }

    public function delete(Request $request)
    {
        $donor = BloodDonor::find($request->delete_donor_id);
        $donor->delete();
        return redirect()->back()->with('error', 'Blood donor deleted successfully.');
    }
}
