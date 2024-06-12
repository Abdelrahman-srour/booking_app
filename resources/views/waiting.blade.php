@extends('layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Booking App')
@section('content')

    <div id="sec-1" class="section">
        <div id="ctn">
            <div class="marquee">
                <div class="marquee-text"></div>
                <div class="marquee-text"></div>
                <div class="marquee-text"></div>
            </div>
            <div class="text-ctn ">You dont have permission to access <span style="color: red">App</span>
            </div>
        </div>
    </div>
@endsection
