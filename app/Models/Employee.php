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
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
