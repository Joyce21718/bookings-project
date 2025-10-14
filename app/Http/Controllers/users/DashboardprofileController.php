<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardprofileController extends Controller
{
     function index(){
        return view('usersdashboard.dashboard');
    }
}
