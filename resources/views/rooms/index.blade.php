@extends('layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Booking App')
@section('content')

    <div class="pd-20 card-box mb-30">
        <div class="row">
            <div class="col-3">
                <h4 class=" h4 text-primary">ALL ROOMS</h4>
            </div>
            <div class="col-9 text-right">
                <a href="" class="badge badge-dark"> <i class="bi bi-clock"> Pending Bookings</i></a>
            </div>
        </div>
        <div class="container pd-8">
            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-md-4 mb-20">
                        <div class="card-box d-block mx-auto pd-20 text-secondary">
                            <div class="img pb-30">
                                <img src="vendors/images/img5.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="h4">Room Type : {{ $room->type }}</h3>
                                <h3 class="h4">Room Status : {{ $room->status }}</h3>
                                @if ($room->status === 'available')
                                <form method="post" action="{{route('update.status', ['id' => $room->id])}}" >
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="booked" name="status">
                                    <input class="btn btn-sm btn-outline-primary text-center" value="BOOK" type="submit"></input>
                                    </form>
                                @elseif ($room->status === 'pending')
                                <form method="post" action="{{route('update.status', ['id' => $room->id])}}" >
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="booked" name="status">
                                    <input class="btn btn-sm btn-outline-success text-center" value="CONFIRM BOOKING" type="submit"></input>
                                    </form>
                                @elseif ($room->status === 'booked')
                                <form method="post" action="{{route('update.status', ['id' => $room->id])}}" >
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="available" name="status">
                                    <input class="btn btn-sm btn-outline-danger text-center" value="CHECKOUT" type="submit"></input>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
