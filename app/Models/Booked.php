<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'customer_name',
        'check_in_date',
        'check_out_date',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
