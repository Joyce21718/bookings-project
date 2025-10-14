<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function index()
    {
        $featuredApartments = [
            ['name'=>'Luxury Apartment','location'=>'Sindangan','price'=>28000,'image'=>'2.jpg','available'=>true,'size'=>'2BR · 2CR · 75 sqm'],
            ['name'=>'Greenfield Residences','location'=>'Sindangan','price'=>25000,'image'=>'3.jpg','available'=>true,'size'=>'1BR · 1CR · 55 sqm'],
            ['name'=>'Sunset View Apartment','location'=>'Sindangan','price'=>30000,'image'=>'4.jpg','available'=>true,'size'=>'2BR · 1CR · 68 sqm'],
            ['name'=>'Ocean Breeze Condo','location'=>'Dipolog','price'=>27000,'image'=>'5.jpg','available'=>false,'size'=>'1BR · 1CR · 60 sqm'],
            ['name'=>'Downtown Studio','location'=>'Dipolog City','price'=>20000,'image'=>'6.jpg','available'=>true,'size'=>'Studio · 1CR · 35 sqm'],
            ['name'=>'Sunrise Apartment','location'=>'Sindangan','price'=>26000,'image'=>'7.jpg','available'=>true,'size'=>'1BR · 1CR · 50 sqm'],
        ];
        return view('homepages.home', compact('featuredApartments'));
    }
}
