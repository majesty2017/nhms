<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $doctors = User::where('role_id', 2)->get();
        $patients = Patient::all();
        $appointments = Appointment::all();
        $appointmentCount = Appointment::all()->count();
        return view('pages..appointment', compact('user', 'doctors', 'patients', 'appointments', 'appointmentCount'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string',
            'appointment_date' => 'required|date',
        ]);

        $appointment = new Appointment();
        $appointment->doctor_id = $request->doctor;
        $appointment->patient_id = $request->patient;
        $appointment->date = $request->appointment_date;
        $appointment->description = $request->description;
        $appointment->save();
        return redirect()->back()->with('info', 'Appointment created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string',
        ]);

        $appointment = Appointment::find($request->update_appointment_id);
        $appointment->doctor_id = $request->doctor;
        $appointment->patient_id = $request->patient;
        $appointment->date = $request->appointment_date;
        $appointment->description = $request->description;
        $appointment->update();
        return redirect()->back()->with('info', 'Appointment saved successfully.');
    }

    public function delete(Request $request)
    {
        $appointment = Appointment::find($request->delete_appointment_id);
        $appointment->delete();
        return redirect()->back()->with('error', 'Appointment deleted successfully.');;
    }
}
