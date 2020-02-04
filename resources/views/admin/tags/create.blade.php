@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card">
			<div class="my-4 card-body">
				<h2 class="text-center card-title">Create New Tag</h2>

				<div class="my-4 container">

					<form method='POST' action="{{ route('tag.store') }}">
						@csrf
						<!-- post title -->
						<div class="my-4 form-group">
							<label for="tag" class="h5 text-secondary">Enter Tag Name</label>
							<input type="text" class="form-control form-control-lg" id="tag" name="tag" placeholder="e.g CakePHP">
							@error('tag')
							<div class="my-2">
								<ul class="list-group">
									<li class="list-group-item list-group-item-danger">*{{ $message }}</li>
								</ul>
							</div>
							@enderror		
						</div>


						<!-- submit button -->
						<div class="my-4 text-center form-group">
							<button type="submit" class="btn btn-lg btn-success">Save Tag</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

@endsection