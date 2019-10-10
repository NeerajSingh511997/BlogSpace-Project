@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-body">
				<h2 class="my-4 text-center card-title">Create new user account</h2>

				<div class="my-4 container-fluid">

					<form method='POST' action="{{ route('user.store') }}" 
					enctype="multipart/form-data">
						@csrf
						<!-- first row -->
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="name" class="h5 text-secondary">
									Name
								</label>
								<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="e.g, Robert">
								
								@error('name')
								<div class="my-2">
									<ul class="list-group">
										<li class="list-group-item list-group-item-danger">
										*{{ $message }}</li>
									</ul>
								</div>
								@enderror		
							</div>
						
						
							<div class="form-group col-lg-6">
								<label for="email" class="h5 text-secondary">
									Email
								</label>
								<input type="email" class="form-control" id="email" name="email" value=" {{ old('email') }}" placeholder="e.g, Robert@blog.com">
								
								@error('email')
								<div class="my-2">
									<ul class="list-group">
										<li class="list-group-item list-group-item-danger">
										*{{ $message }}</li>
									</ul>
								</div>
								@enderror		
							</div>
						</div>

						<!-- second row -->
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="password" class="h5 text-secondary">
									Password
								</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="e.g, Robert@9">
								
								@error('password')
								<div class="my-2">
									<ul class="list-group">
										<li class="list-group-item list-group-item-danger">
										*{{ $message }}</li>
									</ul>
								</div>
								@enderror		
							</div>

							<div class="form-group col-lg-6">
								<label for="password_check" class="h5 text-secondary">
									Password Confirm
								</label>
								<input type="password" class="form-control" id="password_check" name="password_check" placeholder="e.g, Robert@9">

								@error('password_check')
								<div class="my-2">
									<ul class="list-group">
										<li class="list-group-item list-group-item-danger">
										*{{ $message }}</li>
									</ul>
								</div>
								@enderror		
							</div>

						</div>

						<!-- third row -->
						<div class="row">
							<div class="form-group col-lg-12">
								<label for="admin" class="h5 text-secondary">User A/C Type</label>
								<select id="admin" name="account_type" class="form-control">
									<option>Select the User Account Type...</option>
									<option value="1">Admin</option>
									<option value="0">Standard</option>
								</select>

								@error('account_type')
								<div class="my-2">
									<ul class="list-group">
										<li class="list-group-item list-group-item-danger">
										*{{ $message }}</li>
									</ul>
								</div>
								@enderror
							</div>

						</div>
						<!-- submit button -->
						<div class="text-center form-group">
							<button type="submit" class="btn btn-lg btn-success">Submit</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

@endsection

@push('styles')

	

@endpush

@push('scripts')

	

<script>

	 

</script>

@endpush