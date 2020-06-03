<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\MedicineCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicineCategoryController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $med_categories = MedicineCategory::all();
        return view('pages.med_category', compact('user', 'appointmentCount', 'med_categories'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'med_cat' => 'required|string',
            'description' => 'required|string',
        ]);

        $med_cat = new MedicineCategory();
        $med_cat->name = $request->med_cat;
        $med_cat->description = $request->description;

        $med_cat->save();

        return redirect()->back()->with('info', 'Medicine category created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'med_cat' => 'required|string',
            'description' => 'required|string',
        ]);

        $med_cat = MedicineCategory::find($request->update_med_cat_id);
        $med_cat->name = $request->med_cat;
        $med_cat->description = $request->description;

        $med_cat->update();

        return redirect()->back()->with('info', 'Medicine category saved successfully.');
    }

    public function delete(Request $request)
    {
        $med_cat = MedicineCategory::find($request->delete_med_cate_id);

        $med_cat->delete();
        return redirect()->back()->with('error', 'Medicine category deleted successfully.');
    }
}
