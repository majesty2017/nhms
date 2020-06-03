<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $patientCount = Patient::all()->count();
        $doctorCount = User::all()->where('role_id', 2)->count();
        $userCount = User::all()->count();
        $reportCount = Report::all()->count();
        return view('pages.home',
            compact(
         'user',
             'appointmentCount',
                'patientCount',
                'doctorCount',
                'userCount',
                'reportCount'
            )
        );
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function profile($id)
    {
        $user = User::find($id);
        $appointmentCount = Appointment::all()->count();
        return view('pages.profile', [$id], compact('user', 'appointmentCount'));
    }

}
