<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Generatereports extends Controller
{
       function index(){
        return view('admin-dashboard.generatereports');
    }
}
