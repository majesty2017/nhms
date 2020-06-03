<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $patients = Patient::all();
        $payments = Payment::all();
        return view('pages.payment', compact('user', 'appointmentCount', 'patients', 'payments'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $payment = new Payment();
        $payment->patient_id = $request->patient;
        $payment->title = $request->title;
        $payment->transaction_id = rand(10, 10000000000);
        $payment->method = $request->payment_method;
        $payment->amount = $request->amount;
        $payment->description = $request->description;
        $payment->status = $request->status;

        $payment->save();

        return redirect()->back()->with('info', 'payment created successfully');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $payment = Payment::find($request->update_payment_id);
        $payment->patient_id = $request->patient;
        $payment->title = $request->title;
        $payment->method = $request->payment_method;
        $payment->amount = $request->amount;
        $payment->status = $request->status;

        $payment->update();

        return redirect()->back()->with('info', 'payment updated successfully');
    }

    public function delete(Request $request)
    {
        $payment = Payment::find($request->delete_payment_id);
        $payment->delete();
        return redirect()->back()->with('error', 'payment deleted successfully');
    }
}
