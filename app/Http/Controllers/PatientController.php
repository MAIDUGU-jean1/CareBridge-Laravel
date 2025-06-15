<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showHome(){
        return view("Patients.index");
    }
      public function showDashboard(){
        return view("Patients.dashboard");
    }

    public function showFavourite(){
        return view('patients.favourite');
    }

    public function showProfile(){
        return view('patients.profile_setting');
    }
    
    public function showChangePassword(){
        return view('Patients.change_password');
    }

    public function showChat(){
        return view('Patients.chat');
    }
    public function searchDoctor(){
        return view('Patients.search');
    }
    public function showBook(){
        return view('Patients.booking');
    }
    public function showCheckout(){
        return view('Patients.check_out');
    }
}
