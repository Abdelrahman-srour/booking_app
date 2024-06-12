<?php

namespace App\Http\Controllers\Api;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        return Room::where('status', 'available')->get();
    }

    public function store(Request $request)
    {
        $this->authorize('create', Room::class);
        $room = Room::create($request->all());
        return response()->json($room, 201);
    }

    public function update(Request $request, Room $room)
    {
        $this->authorize('update', $room);
        $room->update($request->all());
        return response()->json($room, 200);
    }
}
