@extends('layouts.admin')

@section('content')

	<h1>Zoznam kurzov</h1>
	<hr>

	<table class="table">
		<thead>
			<tr>
				<th>id</th>
	            <th>title</th>
	            <th>description</th>
	            <th>type</th>
	            <th>city</th>
	            <th>teacher</th>
	            <th>price</th>
	            <th>certificate</th>
	            <th>additional_info</th>
	            <th>Vytvorený</th>
	            <th>Aktualizované</th>
	            <th>Operácie</th>
				
			</tr>
		</thead>

		<tbody>
			@if($courses)
				@foreach($courses as $course)
					<tr>
						
						<td>{{ $course->id }}</td>
						<td>{{ $course->title }}</td>
						<td>{{ $course->description }}</td>
						<td>{{ $course->type }}</td>
						<td>{{ $course->city }}</td>
						<td>{{ $course->teacher }}</td>
						<td>{{ $course->price }}</td>
						<td>{{ $course->certificate }}</td>
						<td>{{ $course->additional_info }}</td>

						<td>{{ $course->created_at . " (" . $course->created_at->diffForHumans() . ")" }}</td>
						<td>{{ $course->updated_at . " (" . $course->updated_at->diffForHumans() . ")"}}</td>
						<td>

							<a href="{{route('admin.course.edit', $course->id)}}"><i class="fa fa-edit"></i></a>

				        	{{ Form::open(['method' => 'DELETE', 'route' => ['admin.course.destroy', $course->id]]) }}
				                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
				            {{ Form::close() }}

						</td>
					</tr>
				@endforeach	
			@endif
		</tbody>
	</table>
	@stop