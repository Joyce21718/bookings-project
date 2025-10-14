<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'fullname',
        'email',
        'phone',
        'password',
        'role',
        'status',

    ];

    protected $hidden = [
        'password',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

}
