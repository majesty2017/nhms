<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        $appointmentCount = Appointment::all()->count();

        $patients = Patient::all();
        return view('pages.patient', compact('user', 'patients', 'appointmentCount'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'home_town' => 'required|string',
            'email' => 'email|unique:patients',
            'phone' => 'required|numeric|min:10|unique:patients',
            'nationality' => 'required|string',
            'occupation' => 'required|string',
            'current_address' => 'required|string',
            'dob' => 'required|date',
        ]);

        $patient = new Patient();
        $patient->name = $request->name;
        $patient->patient_id = rand(10, 10000000000);
        $patient->home_town = $request->home_town;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->alternative_phone = $request->alternative_phone;
        $patient->gender = $request->gender;
        $patient->nationality = $request->nationality;
        $patient->occupation = $request->occupation;
        $patient->marital_status = $request->marital_status;
        $patient->current_address = $request->current_address;
        $patient->house_number = $request->house_number;
        $patient->digital_address = $request->digital_address;
        $patient->dob = $request->dob;

        $patient->save();

        return redirect()->back()->with('info', 'Patient created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'home_town' => 'required|string',
            'email' => 'email|unique:patients',
            'phone' => 'required|numeric|min:10',
        ]);

        $patient = Patient::find($request->update_id);
        $patient->name = $request->name;
        $patient->home_town = $request->home_town;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->gender = $request->gender;

        $patient->update();

        return redirect()->back()->with('info', 'Patient saved successfully.');
    }

    public function delete(Request $request)
    {
        $patient = Patient::find($request->delete_patient_id);
        $patient->delete();
        return redirect()->back()->with('error', 'Patient deleted successfully.');
    }
}
