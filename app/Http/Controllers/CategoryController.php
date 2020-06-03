<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        $categories = Category::all();

        $appointmentCount = Appointment::all()->count();

        return view('pages.category', compact('user', 'categories', 'appointmentCount'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->with('info', 'Category created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $category = Category::find($request->category_id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();
        return redirect()->back()->with('info', 'Category saved successfully.');
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->delete();
        return redirect()->back()->with('error', 'Category deleted successfully.');
    }
}
