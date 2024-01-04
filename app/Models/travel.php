<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;

    protected $fillable = [
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
    
}
