<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $prescriptions = Prescription::all();
        $doctors = User::all();
        $patients = Patient::all();
        return view('pages.prescription', compact('prescriptions', 'user', 'appointmentCount', 'doctors', 'patients'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'medication' => 'required|string|max:255',
            'history' => 'required|string|max:255',
            'medication_from_pharmacist' => 'required|string|max:255',
        ]);

        $prescription = new Prescription();
        $prescription->doctor_id = $request->doctor;
        $prescription->patient_id = $request->patient;
        $prescription->case_history = $request->history;
        $prescription->medication = $request->medication;
        $prescription->medication_from_pharmacist = $request->medication_from_pharmacist;
        $prescription->description = $request->description;

        $prescription->save();

        return redirect()->back()->with('info', 'Prescription created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'medication' => 'required|string|max:255',
            'history' => 'required|string|max:255',
            'medication_from_pharmacist' => 'required|string|max:255',
        ]);

        $prescription = Prescription::find($request->update_prescription_id);
        $prescription->doctor_id = $request->doctor;
        $prescription->patient_id = $request->patient;
        $prescription->case_history = $request->history;
        $prescription->medication = $request->medication;
        $prescription->medication_from_pharmacist = $request->medication_from_pharmacist;
        $prescription->description = $request->description;

        $prescription->update();

        return redirect()->back()->with('info', 'Prescription saved successfully.');
    }

    public function delete(Request $request)
    {
        $prescription = Prescription::find($request->delete_prescription_id);
        $prescription->delete();
        return redirect()->back()->with('error', 'Prescription deleted successfully.');
    }
}
