<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price'
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }
}
