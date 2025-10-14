<?php
namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class MybookingController extends Controller
{
    //bookings for the user
    public function index(Request $request)
    {
        $bookings = Booking::with('apartment','customer')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('usersdashboard.mybookings', compact('bookings'));
    }

    // Cancel a booking
    public function cancel(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'cancelled';
        $booking->save();

        return redirect()->route('mybookings')
            ->with('success', 'Booking cancelled successfully!');
    }
}
