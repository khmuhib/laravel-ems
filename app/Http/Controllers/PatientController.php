<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::all();
        return view('admin.patient.index', compact('patients'));
    }

    public function create() {
        return view('admin.patient.create');

    }

    public function edit($id) {
        $patient = Patient::find($id);
        return view('admin.patient.edit', compact('patient'));

    }

    public function store(Request $request) {
        $patient = new Patient();

        $patient->name = $request->name;
        $patient->phone = $request->phone;

        $patient->save();

        return redirect()->route('admin.patient.list')->with('message', 'Patients Inserted Successfully');


    }

    public function update(Request $request, $id) {
        $patient = Patient::find($id);
        //$book_categories = BookCategory::all();


        $patient->name = $request->name;
        $patient->phone = $request->phone;

        $patient->update();

        return redirect()->route('admin.patient.list')->with('message', 'Patient Updated Successfully');


    }
}
