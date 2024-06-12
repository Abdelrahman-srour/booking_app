<?php

namespace App\Policies;

use App\Models\Room;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoomPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the room.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Room  $room
     * @return bool
     */
    public function update(User $user, Room $room)
    {
        return $user->role === 'admin' || $user->role === 'employee';
    }

    /**
     * Determine whether the user can create a room.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can delete the room.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Room  $room
     * @return bool
     */
    public function delete(User $user, Room $room)
    {
        return $user->role === 'admin';
    }
}
