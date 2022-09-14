<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSkill extends Model
{
    use HasFactory;
    protected $table = 'employee_skill';
    protected $primaryKey =  'id';

    protected $fillable = [
        'skill_id',
        'employee_id'
    ];

    // public function employees()
    // {
    //     return $this->belongsToMany(Employee::class);
    // }


}
