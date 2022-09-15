<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeProject;
use App\Models\Project;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $roles = Role::all();
        return view('admin.project.create', compact('employees', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->budget = $request->budget;
        $project->starting_date = $request->starting_date;
        $project->submission_date = $request->submission_date;
        $project->save();

        $data1 = $request->employee;
        $data2 = $request->role;

        foreach ($data1 as $main => $row) {


            $input1 = new EmployeeProject();
            $input1->project_id = $project->id;
            $input1->employee_id = $request->employee[$main];
            //$input1->role_id = $request->role[$main];


            $input1->save();
        }

        foreach ($data2 as $main => $row) {


            $input2 = new EmployeeProject();
            //$input2->project_id = $project->id;
            //$input2->employee_id = $request->employee[$main];
            $input1->role_id = $request->role[$main];


            $input1->save();
        }

        return redirect()->route('project.index')->with('message', 'Project Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $employees = Employee::all();
        $roles = Role::all();
        return view('admin.project.edit', compact('project', 'roles', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->name = $request->name;
        $project->description = $request->description;
        $project->budget = $request->budget;
        $project->starting_date = $request->starting_date;
        $project->submission_date = $request->submission_date;
        $project->status = $request->status;
        //$department = $request->all();

        if (!$project->save()){
            return redirect()-back();
        }else {
            return redirect()->route('project.index')->with('message', 'Project Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('project.index')->with('message', 'Project Deleted');
    }
}
