@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-body">
				<h2 class="text-center card-title">Create New Category</h2>

				<div class="container">

					<form method='POST' action="{{ route('category.update', ['id' => $category->id]) }}">
						@csrf
						<!-- post title -->
						<div class="my-4 form-group">
							<label for="category_name" class="h5 text-secondary">Enter Category Name</label>
							<input type="text" class="form-control form-control-lg" id="category_name" name="category_name" value="{{ $category->name }}" placeholder="e.g supergirl">
							@error('category_name')
							<div class="my-2">
								<ul class="list-group">
									<li class="list-group-item list-group-item-danger">*{{ $message }}</li>
								</ul>
							</div>
							@enderror		
						</div>


						<!-- submit button -->
						<div class="my-4 form-group">
							<button type="submit" class="btn btn-lg btn-success">Save</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

@endsection