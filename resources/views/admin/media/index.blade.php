@extends('layouts.admin')

@section('content')

	<h1>Media</h1>
	<hr>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Meno</th>
				<th>Vytvorený</th>
				<th>Operacia</th>

			</tr>
		</thead>

		<tbody>
			@if($photos)
				@foreach($photos as $photo)
					<tr>
						<td>{{ $photo->id }}</td>
						<td><img height="50" src="{{ $photo->file }}"></td>
						<td>{{ $photo->created_at ? $photo->created_at : 'Nema datum' }}</td>
						<td>

							{{-- <a href="{{route('admin.posts.edit', $post->id)}}"><i class="fa fa-edit"></i></a> --}}

				        	{{ Form::open(['method' => 'DELETE', 'action' => ['AdminMediaController@destroy', $photo->id]]) }}
				                {{ Form::button('<i class="fa fa-trash"></i> nerobi unlink', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
				            {{ Form::close() }}

						</td>
					</tr>
				@endforeach	
			@endif
		</tbody>
	</table>
	@stop