<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use App\Models\User;

class MyController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function user_registration()
    {
        return view('user_registration');
    }
    public function hospital_registration()
    {
        return view('hospital_registration');
    }
    public function hospital_login()
    {
        return view('hospital_login');
    }
    public function terms()
    {
        return view('hospify.hospital.terms&conditions');
    }

}
