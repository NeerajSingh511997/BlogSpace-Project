@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="card">
      <div class="my-4 card-body">
        <h2 class="text-center card-title">Edit Blog's Preferences</h2>
        <div class="my-4 container-fluid">
          <form method='post' action="{{ route('preference.update') }}">
            @csrf
      
              <!-- first row -->
                  <div class="form-group">
                    <label for="blog_name" class="h5 text-secondary">Blog's Name</label>
                    <input type="text" class="form-control form-control-lg" id="blog_name" name="blog_name" placeholder="e.g, Laravel's Blog" value="{{ $preference->blog_name }}">
                    @error('blog_name')
                    <div class="my-2">
                      <ul class="list-group">
                        <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                      </ul>
                    </div>
                    @enderror   
                  </div>


                <!-- second row -->
                  <div class="form-group">
                    <label for="contact_phone" class="h5 text-secondary">Phone Number</label>
                    <input type="string" class="form-control form-control-lg" id="contact_phone" name="contact_phone" placeholder="e.g, +91 011867870" 
                    value="{{ $preference->contact_phone }}">
                    @error('contact_phone')
                    <div class="my-2">
                      <ul class="list-group">
                        <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                      </ul>
                    </div>
                    @enderror   
                  </div>

              <!-- third row -->
                  <div class="form-group">
                    <label for="contact_email" class="h5 text-secondary">Contact Email</label>
                    <input type="email" class="form-control form-control-lg" id="contact_email" name="contact_email" placeholder="e.g, your password" 
                    value="{{ $preference->contact_email }}">
                    @error('contact_email')
                    <div class="my-2">
                      <ul class="list-group">
                      <li class="list-group-item list-group-item-danger">*{{ $message }}</li>
                      </ul>
                    </div>
                    @enderror   
                  </div>

          

            <!-- fourth row -->
            <div class="form-group">

                <label for="contact_address" class="h5 text-secondary">Office Address</label>
                <textarea class="form-control form-control-lg" id="contact_address" rows="3" cols="5" name="contact_address" placeholder="Address to reach with uss...">{{ $preference->contact_address }}</textarea>
                @error('contact_address')
                <div class="my-2">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">
                    {{ $message }}</li>
                  </ul>
                </div>
                @enderror
            </div>

                <!-- fourth row -->
            <div class="form-group">

                <label for="blog_about" class="h5 text-secondary">Blog's About</label>
                <textarea class="form-control form-control-lg" id="blog_about" rows="3" cols="5" name="blog_about" placeholder="Address to reach with uss...">{{ $preference->blog_about }}</textarea>
                @error('blog_about')
                <div class="my-2">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">
                    {{ $message }}</li>
                  </ul>
                </div>
                @enderror
            </div>
          
          
            <!-- submit button -->
            <div class="my-4 text-center form-group">
              <button type="submit" class="btn btn-lg btn-success">
              Save Preferences</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection