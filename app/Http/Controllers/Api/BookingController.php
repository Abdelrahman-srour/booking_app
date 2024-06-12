<?php

namespace App\Http\Controllers\Api;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function store(Request $request)
{
    $booking = Booking::create([
        'user_id' => auth()->id(),
        'room_id' => $request->room_id,
        'status' => 'pending',
    ]);
    return response()->json($booking, 201);
}

public function update(Request $request, Booking $booking)
{
    $this->authorize('update', $booking);
    $booking->update($request->all());
    return response()->json($booking, 200);
}

}
