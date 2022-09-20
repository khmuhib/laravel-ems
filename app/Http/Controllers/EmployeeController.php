<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\EmployeeProject;
use App\Models\EmployeeSkill;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{

    public function index()
    {

        $employees = Employee::orderBy('id','desc')->with('designation','department','employeeskills')->get();
        return view('admin.employee.index', compact('employees'));
    }


    public function create()
    {
        $departments = Department::all();
        $designations = Designation::all();
        $skills = Skill::all();
        return view('admin.employee.create', compact('departments', 'designations', 'skills'));
    }


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

        //dd($request);

        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . rand(1000, 9999) . '.' . $extention;
            $file->move('uploads/admin/img', $filename);
            $employee->img = $filename;
        }
        $employee->save();

        $data = $request->skill;

        //dd($count);



        foreach ($data as $main => $row) {


            $input1 = new EmployeeSkill();
            $input1->employee_id = $employee->id;
            $input1->skill_id = $request->skill[$main];


            $input1->save();
        }

        return redirect()->route('employee.index')->with('message', 'Employee Data Added Successfully');
    }


    public function show(Employee $employee)
    {
        $employee_skills = EmployeeSkill::orderBy('id','desc')->get();
        $skills = Skill::all();
        $departments = Department::all();
        $employee_projects = EmployeeProject::all();
        $projects = Project::all();
        return view('admin.employee.view', compact('employee', 'employee_skills', 'skills', 'departments', 'employee_projects', 'projects'));
    }


    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $designations = Designation::all();
        $skills = Skill::all();
        return view('admin.employee.edit', compact('employee', 'departments', 'designations', 'skills'));
    }


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
        $employee->img = $request->img;


        //return dd($employee);
        if ($request->hasfile('img')) {
            $destination = 'uploads/admin/img/' . $employee->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . rand(1000, 9999) . '.' . $extention;
            $file->move('uploads/admin/img', $filename);
            $employee->img = $filename;
        }



       if( $employee->update()){
          $skills = EmployeeSkill::where('employee_id',$employee->id)->get();

          foreach($skills as $skill){
            $skills = EmployeeSkill::find($skill->id);
            $skills->delete();
          }



          foreach ($request->skill as $main => $row) {
            $input1 = new EmployeeSkill();
            $input1->employee_id = $employee->id;
            $input1->skill_id = $request->skill[$main];
            $input1->save();
        }
       };
        return redirect()->route('employee.index')->with('message', 'Employee Data Updated Successfully');

    }


    
    public function destroy(Employee $employee)
    {
        if(!empty($employee)){
            unlink("uploads/admin/img/".$employee->img);
        }
        $skills = EmployeeSkill::where('employee_id',$employee->id)->get();
        foreach($skills as $skill){
            $skills = EmployeeSkill::find($skill->id);
            $skills->delete();
        }
        $employee->delete();
        return redirect()->route('employee.index')->with('message', 'Employee Deleted');
    }
}
