<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Invoice;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $appointmentCount = Appointment::all()->count();
        $patients = Patient::all();
        $invoices = Invoice::all();
        return view('pages.invoice', compact('user', 'appointmentCount', 'patients', 'invoices'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $invoice = new Invoice();
        $invoice->patient_id = $request->patient;
        $invoice->type = $request->type;
        $invoice->description = $request->description;
        $invoice->amount = $request->amount;
        $invoice->status = $request->status;
        $invoice->save();

        return redirect()->back()->with('info', 'Invoice created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $invoice = Invoice::find($request->update_invoice_id);
        $invoice->patient_id = $request->patient;
        $invoice->type = $request->type;
        $invoice->description = $request->description;
        $invoice->amount = $request->amount;
        $invoice->status = $request->status;
        $invoice->update();

        return redirect()->back()->with('info', 'Invoice saved successfully.');
    }

    public function delete(Request $request)
    {
        $invoice = Invoice::find($request->delete_invoice_id);
        $invoice->delete();
        return redirect()->back()->with('error', 'Invoice deleted successfully.');
    }
}
