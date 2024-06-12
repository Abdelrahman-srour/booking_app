<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RoomController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $this->authorize('create', Room::class);
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Room::class);
        Room::create($request->all());
        return redirect()->route('rooms.index');
    }

    public function edit(Room $id)
    {
        $this->authorize('update', $id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $id)
    {
        $this->authorize('update', $id);
        $id->update($request->all());
        return redirect()->route('rooms.edit');
    }

    public function destroy(Room $id)
    {
        $this->authorize('delete', $id);
        $id->delete();
        return redirect()->route('rooms.index');
    }

    public function updateStatus(Request $request, Room $id)
    {
        $this->authorize('update', $id);
        $id->update(['status' => $request->status]);
        if ($id) {
            return redirect()->back()->with('success', 'Room Status Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
}
}
