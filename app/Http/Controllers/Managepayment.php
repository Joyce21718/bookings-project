<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Managepayment extends Controller
{
     function index(){
        return view('admin-dashboard.managepayment');
}
}