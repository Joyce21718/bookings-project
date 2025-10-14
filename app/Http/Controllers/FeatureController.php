<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {

        $arrayApartments = [
            // ['id' => 1, 'name' => 'Luxury Apartment', 'location' => 'Sindangan', 'price' => 28000, 'image' => '2.jpg', 'available' => true, 'size' => '2BR · 2CR · 75 sqm'],
            // ['id' => 2, 'name' => 'Greenfield Residences', 'location' => 'Sindangan', 'price' => 25000, 'image' => '3.jpg', 'available' => true, 'size' => '1BR · 1CR · 55 sqm'],
            // ['id' => 3, 'name' => 'Sunset View Apartment', 'location' => 'Sindangan', 'price' => 30000, 'image' => '4.jpg', 'available' => true, 'size' => '2BR · 1CR · 68 sqm'],
            // ['id' => 4, 'name' => 'Ocean Breeze Condo', 'location' => 'Dipolog', 'price' => 27000, 'image' => '5.jpg', 'available' => false, 'size' => '1BR · 1CR · 60 sqm'],
            // ['id' => 5, 'name' => 'Downtown Studio', 'location' => 'Dipolog City', 'price' => 20000, 'image' => '6.jpg', 'available' => true, 'size' => 'Studio · 1CR · 35 sqm'],
            // ['id' => 6, 'name' => 'Sunrise Apartment', 'location' => 'Sindangan', 'price' => 26000, 'image' => '7.jpg', 'available' => true, 'size' => '1BR · 1CR · 50 sqm'],
        ];

        $arrayCollection = collect($arrayApartments);

        $dbCollection = Apartment::all()->map(function ($apartment) {
            return [
                'id' => $apartment->id,
                'name' => $apartment->apartment_name,
                'location' => $apartment->location,
                'price' => $apartment->price,
                'image' => $apartment->image,
                'available' => $apartment->status === 'Available',
                'status' => $apartment->status,
                'size' => $apartment->room_no ?? 'N/A'
            ];
        });

        // Merge array + db
        $apartments = $arrayCollection->merge($dbCollection);

        return view('homepages.all_apartment', compact('apartments'));
    }
}
