<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }

    public function create() {
        return view('admin.student.create');
    }

    public function store(Request $request) {
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $student->studentDetail()->create([
            'student_id' => $request->student_id,
            'alternate_phone' => $request->alternate_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect()->route('admin.student.list')->with('message', 'Data Inserted Successfully');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('admin.student.edit', compact('student'));
    }

    public function update(Request $request, $id) {

        //return $request->all();

        $student = Student::find($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $student = Student::find($id);

        $student->studentDetail()->update([
            'student_id' => $id,
            'alternate_phone' => $request->alternate_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect()->route('admin.student.list')->with('message', 'Data Updated Successfully');
    }

    public function delete ($id) {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('admin.student.list')->with('message', 'Data Deleted Successfully');

    }

}
