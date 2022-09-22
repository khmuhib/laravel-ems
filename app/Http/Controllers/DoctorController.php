<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index () {
        $doctors = Doctor::all();
        return view('admin.doctor.index', compact('doctors'));
    }

    public function create () {
        return view('admin.doctor.create');
    }

    public function edit ($id) {
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit',compact('doctor'));
    }

    public function store (Request $request) {
        $doctor = Doctor::create([
            'name' => $request->name,
            'title' => $request->title,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.doctor.list')->with('message', 'Doctor Inserted Successfully');
    }

    public function update (Request $request, $id) {

        $doctor = Doctor::find($id);

        $doctor->update([
            'name' => $request->name,
            'title' => $request->title,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.doctor.list')->with('message', 'Doctor Updated Successfully');
    }

    public function delete ($id) {

        $doctor = Doctor::find($id);

        $doctor->delete();

        return redirect()->route('admin.doctor.list')->with('message', 'Doctor Deleted Successfully');
    }
}
