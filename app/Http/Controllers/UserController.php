<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    function index(){
    $customers = User::all(); 
    return view('admin-dashboard.manageusers', compact('customers'));
}
}