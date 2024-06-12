<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'status'];

    // Define possible statuses
    const STATUS_AVAILABLE = 'available';
    const STATUS_BOOKED = 'booked';
    const STATUS_PENDING = 'pending';

    // Define possible room types
    const TYPE_SINGLE = 'single';
    const TYPE_DOUBLE = 'double';
    const TYPE_SUITE = 'suite';
}
