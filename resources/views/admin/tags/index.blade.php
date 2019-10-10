@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card card-primary">
			<div class="my-4 card-body">
				<h2 class="text-center card-title">All Tags</h2>
				<div class="my-4 container">
					<table class="table table-bordered table-striped text-center">
						<tr>
							<th>Sno.</th>
							<th>Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					@if($tags->count() > 0)
						@foreach($tags as $tag)
						<tr>
							<td>
								<b class="h5 text-secondary">{{ $loop->index + 1 }}.</b>
							</td>
							<td>
								<a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="h5 text-primary">{{ $tag->name }}</a>
							</td>
							<td>
								<a href=" {{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-sm btn-warning">Edit</a>
							</td>
							<td>
								<a href="{{ route('tag.destroy', ['id' => $tag->id]) }}" class="btn btn-sm btn-danger">X</a>
							</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="h5 text-center text-danger">
								<b>Sorry No Tags Found</b>

							</td>
						</tr>
					@endif
					</table>
				</div>
				<div class="text-center container">
					<a href="{{ route('tag.create') }}" class="btn btn-lg btn-success">Create New Tag</a>
				</div>
			</div>
		</div>
	</div>

@endsection