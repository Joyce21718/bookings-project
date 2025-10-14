<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    public function create($id)
    {
        $apartment = Apartment::findOrFail($id);

        return view('homepages.booknow', compact('apartment'));
    }



    public function store(Request $request)
    {
        $proofPath = $request->hasFile('proof_payment')
            ? $request->file('proof_payment')->store('proofs', 'public')
            : null;
        // Save booking

        $customer = Customer::updateOrCreate(
            ['email' => $request->email],
            [
                'fullname' => $request->fullname,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => 'customer',
                'status' => 'active',
            ]
        );

        Booking::create([
            'apartment_id' => $request->apartment_id,
            'fullname' => $customer->id,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'payment_method' => $request->payment_method,
            'proof_payment' => $proofPath ?? null,
            'requests' => $request->requests,
            'status' => 'Pending',

        ]);


        session([
            'customer_id' => $customer->id,
            'customer_name' => $customer->fullname,
        ]);

        return redirect()->route('user.dashboard')
            ->with('success', 'Booking confirmed successfully!');
    }
    public function index()
    {
        $bookings = Booking::with('apartment')->orderBy('created_at', 'desc')->get();
        return view('admin-dashboard.managebooking', compact('bookings'));
    }
    public function edit(Booking $booking)
    {
        return view('admin-dashboard.editbooking', compact('booking'));
    }
    public function update(Request $request, Booking $booking)
    {
        $booking->update([
            'fullname' => $request->fullname ?? $booking->fullname,
            'phone' => $request->phone ?? $booking->phone,
            'email' => $request->email ?? $booking->email,
            'checkin' => $request->checkin ?? $booking->checkin,
            'checkout' => $request->checkout ?? $booking->checkout,
            'payment_method' => $request->payment_method ?? $booking->payment_method,
            'requests' => $request->requests ?? $booking->requests,
            'status' => $request->status ?? $booking->status,
            'admin_note' => $request->admin_note ?? $booking->admin_note,
        ]);
        return redirect()->route('admin.bookings.index')
            ->with('success', 'Booking updated successfully!');
    }

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);

        if ($booking->status === 'Pending') {
            $booking->status = 'Cancelled';
            $booking->save();
            return back()->with('success', 'Booking cancelled successfully.');
        }

        return back()->with('error', 'Only pending bookings can be cancelled.');
    }
    public function destroy(Booking $booking)
    {
        if ($booking->proof_payment) {
            Storage::disk('public')->delete($booking->proof_payment);
        }

        $booking->delete();

        return redirect()->route('admin.bookings.index')
            ->with('success', 'Booking deleted successfully!');
    }
}
