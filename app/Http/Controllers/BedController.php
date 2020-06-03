<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Bed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BedController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $beds = Bed::all();
        $appointmentCount = Appointment::all()->count();
        return view('pages.bed', compact('user', 'beds', 'appointmentCount'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'bed_number' => 'required|string',
            'bed_type' => 'required|string',
        ]);

        $bed = new Bed();
        $bed->bed_number = $request->bed_number;
        $bed->bed_type = $request->bed_type;
        $bed->description = $request->description;
        $bed->status = $request->status;
        $bed->save();
        return redirect()->back()->with('info', 'Bed created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'bed_number' => 'required|string',
            'bed_type' => 'required|string',
            'description' => 'required:string',
        ]);

        $bed = Bed::find($request->update_bed_id);
        $bed->bed_number = $request->bed_number;
        $bed->bed_type = $request->bed_type;
        $bed->description = $request->description;
        $bed->status = $request->status;
        $bed->update();
        return redirect()->back()->with('info', 'Bed saved successfully.');
    }

    public function delete(Request $request)
    {
        $bed = Bed::find($request->delete_bed_id);
        $bed->delete();
        return redirect()->back()->with('error', 'Bed deleted successfully.');;
    }
}
