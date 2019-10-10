@extends('layouts.app')


@section('content')
	
	<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="{{ asset('img/registration-form-1.jpg') }}" alt="">
				</div>
				<form action="{{ route('register') }}" method="POST">

					{{ csrf_field() }}

					<h3>Registration Form</h3>

					<div class="form-wrapper">
						<input id="name" type="text" placeholder="First Name" class="form-control" value ="{{ old('name') }}" required autocomplete="name" autofocus>
						<i class="zmdi zmdi-people"></i> 

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

					</div>

					<!-- <div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div> -->

					<div class="form-wrapper">

						<input type="email" id="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
						<i class="zmdi zmdi-email"></i> 
					
					@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror

					</div>

					<!-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> -->

					<div class="form-wrapper">

						<input type="password" id="password" placeholder="Password" class="form-control" name="password">

						<i class="zmdi zmdi-lock"></i>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

					</div>

					<div class="form-wrapper">

						<input type="password" id="password-confirm" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						<i class="zmdi zmdi-lock"></i>

					<!-- 	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
 -->
					</div>

					<button type="submit">
                    	    <i class="zmdi zmdi-arrow-right"></i> Register
                    </button>

				</form>
			</div>
				</div>

@endsection
	

@push('styles')
	
	<link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/signup/style.css')}}">

@endpush

