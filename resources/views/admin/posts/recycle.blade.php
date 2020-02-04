@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card">
			<div class="my-4 card-body">
				<h2 class="text-center card-title">Recycle Bin</h2>
				<div class="my-4 container">
					<table class="table table-bordered table-striped text-center">
						<tr>
							<th>No</th>
							<th>Featured</th>
							<th>Trashed Post</th>
							<th>Restore</th>
							<th>Clean</th>
						</tr>

					@if($posts->count() > 0)
						@foreach($posts as $post)
						<tr>
							<td>
								<b class="h3 text-secondary">{{ $loop->index + 1 }}.</b>
							</td>
							<td>
								<img src="{{ asset($post->featured) }}" alt="img" class="post-thumb">
 							</td>
							<td>
								<a href="{{ route('post.restore', ['id' => $post->id]) }}" class="h5 text-secondary">{{ str_limit($post->title, 60) }}</a>
							</td>
							<td>
								<a href="{{ route('post.restore', ['id' => $post->id]) }}" class="h5 text-center btn btn-success">Restore</a>
							</td>
							<td>
								<a href="{{ route('post.remove', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">X</a>
							</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="h5 text-center text-secondary">
								<b>Sorry, No Trashed Post Found</b>
							</td>
					@endif
					</table>
				</div>
				<div class="my-2 text-center container">
					<a href="{{ route('post.clean')}}" class="btn btn-lg btn-danger">Clean Recycle Bin</a>
				</div>
			</div>
		</div>
	</div>

@endsection