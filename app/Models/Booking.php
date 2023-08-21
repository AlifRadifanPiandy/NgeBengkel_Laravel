<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'service_type',
        'name',
        'vehicle_type',
        'transmission',
        'license_plate',
        'date',
        'notes',
        'ammount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class)->withTimestamps();
    }
}
