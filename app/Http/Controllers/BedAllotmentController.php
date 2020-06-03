<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Bed;
use App\Models\BedAllotment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BedAllotmentController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $allotments = BedAllotment::all();
        $appointmentCount = Appointment::all()->count();
        $beds = Bed::all();
        $patients = Patient::all();
        return view('pages.bed_allotment', compact('user', 'beds', 'appointmentCount', 'allotments', 'beds', 'patients'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'allotment_date' => 'required|date',
            'discharge_date' => 'required|date',
        ]);

        $allotment = new BedAllotment();
        $allotment->bed_id = $request->bed;
        $allotment->patient_id = $request->patient;
        $allotment->allotment_date = $request->allotment_date;
        $allotment->discharge_date = $request->discharge_date;
        $allotment->status = $request->status;
        $allotment->save();
        return redirect()->back()->with('info', 'Bed allotment created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'allotment_date' => 'required|date',
            'discharge_date' => 'required|date',
            'bed' => 'required',
            'patient' => 'required',
        ]);

        $allotment = BedAllotment::find($request->update_bed_allotment_id);
        $allotment->bed_id = $request->bed;
        $allotment->patient_id = $request->patient;
        $allotment->allotment_date = $request->allotment_date;
        $allotment->discharge_date = $request->discharge_date;
        $allotment->status = $request->status;
        $allotment->update();
        return redirect()->back()->with('info', 'Bed allotment saved successfully.');
    }

    public function delete(Request $request)
    {
        $allotment = BedAllotment::find($request->delete_bed_allotment_id);
        $allotment->delete();
        return redirect()->back()->with('error', 'Bed allotment deleted successfully.');
    }
}
