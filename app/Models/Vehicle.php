<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'name',
        'vehicle_type',
        'transmission',
        'license_plate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
