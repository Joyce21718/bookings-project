<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Manageapartment extends Controller
{
    
    function index(){
        return view('admin-dashboard.manageapartments');
    }
}
