@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row">
        <div class="container">
          <div class="card">
            <!-- card header section -->
            <div class="mb-4 profile">
              <div class="profile-cover">
                @if($user->profile->cover)
                  <img src="{{ asset($user->profile->cover) }}" alt="{{ $user->name }}">
                @else
                  <img src="{{ asset('blog/cover/cover.jpg') }}" alt="landscape-default">
                @endif
              </div>
              <div class="profile-img">
                @if($user->profile->avatar)
                  <img src="{{ asset($user->profile->avatar) }}" alt="$user->name">                  
                @else
                  <img src="{{ asset('blog/avatar/avatar.png') }}" alt="potrait-default">
                  
                @endif
              </div>
            </div>

            <!-- card body section -->
            <div class="mt-2 card-body justify-content-end">
              <div class="mt-2  profile-body container">
                
                  <div class="container">
                    <div class="row">
                      <div class="pt-4 col-lg-6 border"> 
                       <!-- Name -->
                        <h1 class="card-title text-center text-success">{{ $user->name }}</h1>

                        <!-- Email -->
                        <p class="card-text text-center">
                          <span class="h3 text-info">
                            <i class="fa fa-home"></i> {{ $user->email }}</span>
                        </p>

                        <!-- Social Profiles -->
                        <div class="text-center">
                          <span>
                          @if($user->profile->facebook)
                            <a href="{{ $user->profile->facebook }}" target="blank">
                              <i class="fa fa-facebook"></i> f 
                            </a>
                          @endif
                          @if($user->profile->instagram)
                            <a href="{{ $user->profile->instagram }}" target="blank">
                              <i class="fa fa-instagram"></i> i
                            </a>
                          @endif
                          @if($user->profile->youtube)
                            <a href="{{ $user->profile->youtube }}" target="blank">
                              <i class="fa fa-youtube"></i> y
                            </a>
                          @endif
                          @if($user->profile->twitter)
                            <a href="{{ $user->profile->twitter }}" target="blank">
                              <i class="fa fa-twitter"></i> t
                            </a>
                          @endif
                          </span>
                        </div>
                      </div>

                      <div class="col-lg-6 ">
                        <!-- About Section -->
                        <div class="pt-1 text-center border">
                          <blockquote class="text-secondary blockquote">
                            "{!! $user->profile->about !!}"
                          </blockquote>
                        </div>
                      </div>
                    </div>
                
                <div class="mt-4 text-center">
                    <a href="{{ route('profile.edit') }}" alt="" class="btn btn-success">
                    Edit Your Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
                