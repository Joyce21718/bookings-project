<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function register(Request $request)
    {
        // Create customer
        Customer::create([
            'fullname' => $request->fullname,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('customlogin')
            ->with('success', 'Account created successfully! Please login to continue.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $customer = Customer::where('email', $request->email)->first();

        if ($customer && Hash::check($request->password, $customer->password)) {
            // Save to session
            session([
                'customer_id'   => $customer->id,
                'customer_name' => $customer->fullname,
            ]);

            return redirect()->route('user.dashboard')
                ->with('success', 'Welcome back, '.$customer->fullname.'!');
        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }
}
