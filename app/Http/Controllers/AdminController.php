<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ShowADminLogINForm(){
        return view('admin.login');
    } //end method


    public function ShowADminRegisterForm(){
        return view('admin.register');
    } //end method

    public function ShowDashboard(){
        return view('admin.dashboard');
    } //end method
}
