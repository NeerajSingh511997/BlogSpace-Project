@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-body">
				<h2 class="text-center card-title">All Users</h2>
				<div class="container">
					<table class="table table-bordered table-striped text-center">
						<tr>
							<th>Avatar</th>
							<th>Name</th>
							<th>Account Type</th>
							<th>Permissions</th>
							<th>Delete</th>
						</tr>
					
						@foreach($users as $user)
						<tr>
							<td>							
								<img src="{{ asset($user->profile->avatar) }}" class="avatar" alt="{{$user->name}}">
						
							</td>
							<td>
								<a href="{{ route('user.edit', ['id' => $user->id]) }}" class="h5 text-dark">{{ $user->name }}</a>
							</td>
							<td>
							@if($user->admin != 0)
								<b class="btn btn-sm btn-success">admin</b>
							@else
								<b class="btn btn-sm btn-primary">standard</b>
							@endif
							</td>
							<td>
							@if($user->admin != 0)
								<a href="{{ route('remove.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">remove admin</a>
							@else
								<a href="{{ route('create.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">create admin</a>
							@endif
							</td>
							<td>
								<a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">X</a> 
							</td>
							<!-- <td> -->
								{{-- {{ Auth::user()->admin }} And {{ $user->admin }} --}}
							<!-- </td> -->
						</tr>
						@endforeach
		
					</table>
				</div>
				<div class="container text-center">
					<a href="{{ route('user.create') }}" class="btn btn-success btn-lg">
					Create New User</a>
				</div>
			</div>
		</div>
	</div>

@endsection