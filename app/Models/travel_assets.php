<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel_assets extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_id',
        'image'
    ];

    public function travels()
    {
        return $this->belongsTo(travel::class);
    }
}
