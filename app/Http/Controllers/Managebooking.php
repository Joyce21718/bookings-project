<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class Managebooking extends Controller
{
       function index(){

         $bookings = Booking::with('apartment')->orderBy('created_at', 'desc')->get();
         
               return view('admin-dashboard.managebooking', compact('bookings'));
    }
}
