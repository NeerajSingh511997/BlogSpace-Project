@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="card card-primary">
      <div class="my-4 card-body">
        <h2 class="text-center card-title">Edit Profile</h2>
        <div class="my-4 container-fluid">
          <form method='POST' action="{{ route('user.update', ['id' => $user->id]) }}" 
            enctype="multipart/form-data">
            @csrf
            
            
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name" class="h5 text-secondary">Name</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="e.g, jihyo" value="{{ $user->name }}">
                    @error('name')
                    <div class="my-2">
                      <ul class="list-group">
                        <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                      </ul>
                    </div>
                    @enderror   
                  </div>
                </div>
              

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email" class="h5 text-secondary">Email</label>
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="e.g, Jihyo@blog.com" value="{{ $user->email }}">
                  @error('email')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>
            </div>
            
            <!-- second row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="password" class="h5 text-secondary">Password</label>
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="e.g, Jihyo@123" >
                  @error('password')
                  <div class="my-2">
                    <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="password_check" class="h5 text-secondary">Password Confirm</label>
                  <input type="password" class="form-control form-control-lg" id="password_check" name="password_check" placeholder="e.g, Jihyo@123">
                  @error('password_check')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>
            </div>

            <!-- third row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="avatar" class="h5 text-secondary">Select Avatar</label>
                  <input type="file" id="avatar" class="my-1 form-control form-control-lg" name="avatar">
                  @error('avatar')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="cover" class="h5 text-secondary">Select Cover</label>
                  <input type="file" id="cover" class="my-1 form-control form-control-lg" name="cover">
                  @error('cover')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <!-- fourth row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="facebook" class="h5 text-secondary">Facebook Profile</label>
                  <input type="text" class="form-control form-control-lg" id="facebook" name="facebook" placeholder="e.g, http://facebook.com/username" value=" {{ $user->profile->facebook }}">
                  @error('facebook')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="youtube" class="h5 text-secondary">Youtube Profile</label>
                   <input type="text" class="form-control form-control-lg" id="youtube" name="youtube" placeholder="e.g, http://youtube.com/username" value=" {{ $user->profile->youtube }}">
                 @error('youtube')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>
            </div>

            <!-- five row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="twitter" class="h5 text-secondary">Twitter Profile</label>
                  <input type="text" class="form-control form-control-lg" id="twitter" name="twitter" placeholder="e.g, http://twitter.com/username" value=" {{ $user->profile->twitter }}">
                  @error('twitter')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="instagram" class="h5 text-secondary">Instagram Profile</label>
                  <input type="text" class="form-control form-control-lg" id="instagram" name="instagram" placeholder="e.g, http://instagram.com/username" 
                  value=" {{ $user->profile->instagram }}">
                  @error('instagram')
                  <div class="my-2">
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                    </ul>
                  </div>
                  @enderror   
                </div>
              </div>
            </div>            
            
            <!-- sixth row -->
            <div class="row">
              <div class="col-lg-12">
                <label for="about" class="h5 text-secondary">Tell us about yourself</label>
                <textarea class="form-control form-control-lg" id="about" rows="4" cols="3" name="about" value="{{ $user->profile->about }}" placeholder="Tell us about yourself..."></textarea>
                @error('about')
                <div class="my-2">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">
                    {{ $message }}</li>
                  </ul>
                </div>
                @enderror
              </div>
            </div>
          
            <!-- submit button -->
            <div class="my-2 text-center form-group">
              <button type="submit" class="btn btn-lg btn-success">
              Save Profile</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection