<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Room;
use App\Models\Booking;
use App\Policies\RoomPolicy;
use App\Policies\BookingPolicy;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
    }
}
