<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tittle',
        'description',
        'location',
        'departure_time',
        'arrival_time',
        'price'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function travel_assets()
    {
        return $this->hasMany(travel_assets::class);
    }
}
