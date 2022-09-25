<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('admin.appointment.index');
    }
    public function create(){
        return view('admin.appointment.create');
    }
}
