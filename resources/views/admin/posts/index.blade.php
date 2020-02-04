@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card">
			<div class="my-4 card-body">
				<h2 class="text-center card-title">All Published Post</h2>
				<div class="my-4 container">
					<table class="table table-bordered table-striped text-center">
						<tr>
							<th>No</th>
							<th>Featured</th>
							<th>Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					@if($posts->count() > 0)
						@foreach($posts as $post)
						<tr>
							<td>
								<b class="h4 text-center text-secondary">{{ $loop->index + 1 }}.</b>
							</td>
							<td>
								<img src="{{ asset($post->featured) }}" alt="{{ $post->title }}" class="post-thumb">
 							</td>
							<td>
								<a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h5 text-secondary">{{ str_limit($post->title, 40) }}</a>
							</td>
							<td>
								<a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h5 text-center btn btn-sm btn-warning">Edit</a>
							</td>
							<td>
								<a href="{{ route('post.destroy', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">X</a>
							</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="h5 text-center text-secondary">
								<b>Sorry No Post Found</b>
							</td>
						</tr>

					@endif
					</table>
				</div>
				<div class="my-2 text-center container">
					<a href="{{ route('post.create') }}" class="btn btn-lg btn-success">
					Create New Post</a>
				</div>
			</div>
		</div>
	</div>

@endsection