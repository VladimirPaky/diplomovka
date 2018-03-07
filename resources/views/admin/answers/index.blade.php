@extends('layouts.admin')

@section('content')

<h1>Zoznam kurzov</h1>
<hr>

<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Otazka</th>
			<th>Otazka</th>
			
		</tr>
	</thead>

	<tbody>
		@if($answers)
		@foreach($answers as $answer)
		<tr>

			<td>{{ $answer->id }}</td>
			<td>{{ $answer->id }}</td>
			
			<td>{{ $answer->answer }}</td>
			<td>{{ $answer->right_answer }}</td>
	

				{{-- <a href="{{route('courses.edit', $course->id)}}"><i class="fa fa-edit"></i></a>

				<a href="{{route('courses.lessons.create', $course->id)}}">Create Courses</a>


				{{ Form::open(['method' => 'DELETE', 'route' => ['courses.destroy', $course->id]]) }}
				{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
				{{ Form::close() }} --}}

			</td>
		</tr>
		@endforeach	
		@endif
	</tbody>
</table>
@stop