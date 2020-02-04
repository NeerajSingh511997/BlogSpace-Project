@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card card-primary">
			<div class="my-4 card-body">
				<h2 class="text-center card-title">Edit Tag</h2>

				<div class="my-4 container">

					<form method='POST' action="{{ route('tag.update', ['id' => $tag->id]) }}">
						@csrf
						<!-- post title -->
						<div class="my-4 form-group">
							<label for="tag" class="h5 text-secondary">Create New Tag</label>
							<input type="text" class="form-control form-control-lg" id="tag" name="tag" value="{{ $tag->name }}" placeholder="e.g Python">
							@error('name')
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