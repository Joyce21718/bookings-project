<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Customer;
use App\Models\Booking;

class DashboardadminA extends Controller
{
    public function index()
    {
        $apartmentsCount     = Apartment::count();
        $tenantsCount        = Customer::count();
        $paymentsTotalCount  = Booking::count();
        $requestsCount       = Booking::count();

        return view('admin-dashboard.admin', compact(
            'apartmentsCount',
            'tenantsCount',
            'paymentsTotalCount',
            'requestsCount'
        ));
    }
}
