@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card card-primary">
			<div class="my-4 card-body">
				<h2 class="text-center card-title">Create your user</h2>

				<div class="my-4 container-fluid">

					<form enctype="multipart/form-data" method='POST' 
					action="{{ route('post.update', ['id' => $post->id]) }}">
						@csrf
						<!-- post title -->
						<div class="my-4 form-group">
							<label for="title" class="h5 text-secondary">Your Post Title</label>
							<input type="text" class="form-control form-control-lg" id="title" name="title" value="{{ $post->title }}">
							@error('title')
							<div class="my-2">
								<ul class="list-group">
									<li class="list-group-item list-group-item-danger">*{{ $message }}</li>
								</ul>
							</div>
							@enderror		
						</div>
						
						<!-- select tag -->
						<span class="h5 text-secondary">Your Post Tags</span><br>	
						<div class="my-2 form-check checkbox-border">
						@foreach($tags as $tag)					
							<label class="m-2 p-2 form-check-label">
						    	<input type="checkbox" class="form-check-input" name='tags[]' value="{{ $tag->id }}">
						    	<span class="h5 text-secondary">{{ $tag->name }}</span>
						  	</label>
						@endforeach
						</div>
						@error('tags')
						<div class="my-2">
							<ul class="list-group">
								<li class="list-group-item list-group-item-danger">{{ $message }}</li>
							</ul>
						</div>
						@enderror

						<!-- select checkbox -->
						<div class="my-4 form-group">
							<label class="h5 text-secondary">Your Post Category</label>
							<select class="form-control form-control-lg" name="category_id">
								<option>Select a Category</option>
							@foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
							</select>
							@error('category_id')
							<div class="my-2">
								<ul class="list-group">
									<li class="list-group-item list-group-item-danger">{{ $message }}</li>
								</ul>
							@enderror
						</div>

						<!--  file upload -->
						<div class="my-4 form-group">
							<label for="title" class="h5 text-secondary">Your Post Featured image</label>
							<input type="file" id="featured" class="my-1 form-control form-control-lg" name="featured">
							@error('featured')
							<div class="my-2">
								<ul class="list-group">
									<li class="list-group-item list-group-item-danger">{{ $message }}</li>
								</ul>
							</div>
							@enderror
						</div>
						
						<!-- post content -->
						<div class="my-4 form-group">
							<label for="title" class="h5 text-secondary">Your Post Content</label>
							<textarea class="form-control form-control-lg" id="content" rows="5" cols="5" name="content">{{ $post->content }}"</textarea>
							@error('content')
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
							<!-- Published Button -->
							<button type="submit" class="btn btn-lg btn-success" name="submit" value="published_post">
							Publish Post</button>
							<!-- Draft Button -->
							<button type="submit" class="btn btn-lg btn-warning" name="submit" value="draft_post">
							Saved to Drafts</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

@endsection

@push('styles')

<!-- SummerNotes Styles-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">	

@endpush

@push('scripts')

<!-- SummerNotes Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

<script>

	 $('#content').summernote({
        placeholder: 'Your Post Content Is Here...',
        tabsize: 4,
        height: 200,
      });

</script>

@endpush