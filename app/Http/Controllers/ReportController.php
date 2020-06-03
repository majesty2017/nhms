<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $patients = Patient::all();
        $doctors = User::all();
        $reports = Report::all();
        return view('pages.report', compact('user', 'appointmentCount', 'doctors', 'patients', 'reports'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'description' => 'required|string',
        ]);

        $report = new Report();
        $report->doctor_id = $request->doctor;
        $report->type = $request->type;
        $report->patient_id = $request->patient;
        $report->description = $request->description;

        $report->save();

        return redirect()->back()->with('info', 'Report created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'description' => 'required|string',
        ]);

        $report = Report::find($request->update_report_id);
        $report->doctor_id = $request->doctor;
        $report->type = $request->type;
        $report->patient_id = $request->patient;
        $report->description = $request->description;

        $report->update();

        return redirect()->back()->with('info', 'Report saved successfully.');
    }

    public function delete(Request $request)
    {
        $report = Report::find($request->delete_report_id);
        $report->delete();
        return redirect()->back()->with('error', 'Report deleted successfully.');
    }
}
