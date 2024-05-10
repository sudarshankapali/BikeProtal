<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bikeDetail extends Model
{
    protected $fillable = [
        'name', // Add 'name' attribute here
        // Add other attributes as needed
        'price',
        'variant',
        'category',
        'engine_type',
        'displacement',
        'cooling_system',
        'top_speed',
        'clutch_type',
        'start_type',
        'fuel_type',
        'fuel_supply',
        'max_torque',
        'mileage',
        'gears',
    ];
}
