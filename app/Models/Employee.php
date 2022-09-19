<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'phone',
        'address',
        'nid',
        'salary',
        'dob',
        'join_date',
        'img',
        'department_id',
        'designation_id',
        'skill',
    ];

    public function employeeskills()
    {
        return $this->hasMany(EmployeeSkill::class,'employee_id','id')->with('skills');
    }


    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }
}
