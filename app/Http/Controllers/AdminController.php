<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * show admin registration
     */
    public function ShowAdminRegisterForm(){
        return view('admin.register');
    }

    public function ShowAdminLoginForm(){
        return view('admin.login');
    }

    public function ShowAdminDashboard(){
        return view('admin.dashboard');
    }



}
