@extends('layouts.admin')

@section('content')

<h1>Zoznam odpovedi pre otazku</h1>
<hr>

<table id="mojaTabulka" class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Otazka</th>
			<th>spravna odpoved</th>
			
		</tr>
	</thead>

	<tbody>
		@if($answers)
		@foreach($answers as $answer)
		<tr>

			<td>{{ $answer->id }}</td>
			{{-- <td>{{ $answer->id }}</td> --}}
			
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

<input type="hidden" id="test_id" value="{{$test_id}}">
<input type="hidden" id="course_id" value="{{$course->id}}">
{!! Form::open(['method'=>'POST', 'action'=> 'AdminTestQuestionAnswersController@store']) !!}

	<div class="form-group">
		{!! Form::label('question', 'Nazov:') !!}
		{!! Form::text('question', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Vytvoriť odpoveď', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}
@stop