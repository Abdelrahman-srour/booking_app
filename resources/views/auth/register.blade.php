@extends('layouts.auth-master')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Booking App')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="register-box bg-white box-shadow border-radius-10 ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">First Name <span style="color: red">*</span></label>
                            <div class="col-sm-8 ">
                                <input type="text" name="first_name" placeholder="mazen" required
                                    class=" form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Last Name <span style="color: red">*</span></label>
                            <div class="col-sm-8 ">
                                <input type="text" name="last_name" placeholder="mostafa" required
                                    class=" form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">E-mail <span style="color: red">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" name="email" placeholder="example@example.com" required
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mobile Phone <span style="color: red">*</span></label>
                            <div class="col-sm-8">
                                <input name="mobile_num" type="number" placeholder="01 XXX-XXX-XXX" required
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password <span style="color: red">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" name="password" placeholder="********" required
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Confirm Passowrd <span
                                    style="color: red">*</span></label>
                            <div class="col-sm-8">
                                <input for="password-confirm" name="password_confirmation" placeholder="********"
                                    placeholder="" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign Up">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
