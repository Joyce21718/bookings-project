<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardadmin extends Controller
{
    function index(){
        return view('admin-dashboard.admin');
    }
}
