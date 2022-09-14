<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $departments = Department::all();
        $designations = Designation::all();
        return view('admin.employee.index', compact('employees', 'departments', 'designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $designations = Designation::all();
        return view('admin.employee.create', compact('departments', 'designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->nid = $request->nid;
        $employee->salary = $request->salary;
        $employee->dob = $request->dob;
        $employee->join_date = $request->join_date;
        $employee->resign_date = $request->resign_date;
        $employee->address = $request->address;
        $employee->designation_id = $request->designation_id;
        $employee->department_id = $request->department_id;

        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . rand(1000, 9999) . '.' . $extention;
            $file->move('uploads/admin/img', $filename);
            $employee->img = $filename;
        }
        $employee->save();

        return redirect()->route('employee.index')->with('message', 'Employee Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $designations = Designation::all();
        return view('admin.employee.edit', compact('employee', 'departments', 'designations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //$employee = Employee::find($employee);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->nid = $request->nid;
        $employee->salary = $request->salary;
        $employee->dob = $request->dob;
        $employee->join_date = $request->join_date;
        $employee->resign_date = $request->resign_date;
        $employee->address = $request->address;
        $employee->designation_id = $request->designation_id;
        $employee->department_id = $request->department_id;
        //$employee->img = $request->img;
        //return dd($employee);
        if($request->hasfile('img'))
        {
            $destination = 'uploads/admin/img/'.$employee->img;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().rand(1000, 9999).'.'.$extention;
            $file->move('uploads/admin/img', $filename);
            $employee->img = $filename;
        }

        if (!$employee->save()){
            return redirect()-back();
        }else {
            return redirect()->route('employee.index')->with('message','Employee Data Updated Successfully');
        }
        //$employee->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')->with('message', 'Employee Deleted');
    }
}
