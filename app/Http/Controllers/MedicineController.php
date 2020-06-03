<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\MedicineCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicineController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $med_cats = MedicineCategory::all();
        $medicines = Medicine::all();
        return view('pages.medicine', compact('user', 'appointmentCount', 'medicines', 'med_cats'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'med_name' => 'required|string',
            'manufacturer' => 'required|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $medicine = new Medicine();
        $medicine->name = $request->med_name;
        $medicine->med_category_id = $request->med_category;
        $medicine->price = $request->price;
        $medicine->manufacturing_company = $request->manufacturer;
        $medicine->quantity = $request->quantity;
        $medicine->status = $request->status;

        $medicine->save();

        return redirect()->back()->with('info', 'Medicine created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'med_name' => 'required|string',
            'manufacturer' => 'required|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $medicine = Medicine::find($request->update_med_id);
        $medicine->name = $request->med_name;
        $medicine->med_category_id = $request->med_category;
        $medicine->price = $request->price;
        $medicine->manufacturing_company = $request->manufacturer;
        $medicine->quantity = $request->quantity;
        $medicine->status = $request->status;

        $medicine->update();

        return redirect()->back()->with('info', 'Medicine saved successfully.');
    }

    public function delete(Request $request)
    {
        $medicine = Medicine::find($request->delete_med_id);
        $medicine->delete();
        return redirect()->back()->with('error', 'Medicine deleted successfully.');
    }
}
