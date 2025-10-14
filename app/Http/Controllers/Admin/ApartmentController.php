<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('admin-dashboard.manageapartments', compact('apartments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'apartment_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'room_no' => 'required|string|max:255',
            'status' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('apartments'), $filename);
            $imagePath = $filename;
        }

        Apartment::create([
            'apartment_name' => $request->apartment_name,
            'location' => $request->location,
            'room_no' => $request->room_no,
            'status' => $request->status,
            'price' => $request->price,
            'image' => $imagePath,
            'size' => '60 sqm',
        ]);

        return redirect()->route('admin.apartments.index')->with('success', 'Apartment added successfully!');
    }

    // Delete apartment
    public function destroy($id)
    {
        $apartment = Apartment::findOrFail($id);

        if ($apartment->image && Storage::disk('public')->exists($apartment->image)) {
            Storage::disk('public')->delete($apartment->image);
        }

        $apartment->delete();

        return redirect()->route('admin.apartments.index')->with('success', 'Apartment deleted successfully!');
    }
}
