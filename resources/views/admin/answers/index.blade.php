@extends('layouts.admin')

@section('content')

<h1>Zoznam odpovedi pre otazku</h1>
{{-- {{ $course->questions() }} --}}	
<hr>
<a class="btn btn-primary btn-sm" href="{{ route('courses.tests.questions.index',[$course->id, $test_id])}}">Spat na zoznam otazok</a>
<br>
<br>
<table id="mojaTabulka" class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Otazka</th>
			{{-- <th>Spravna odpoved</th> --}}
			<th>Operacie</th>
		</tr>
	</thead>

	<tbody>
		@if($answers)
		@foreach($answers as $answer)
		<tr>
			<td>{{ $answer->id }}</td>
			{{-- <td>{{ $answer->id }}</td> --}}
			
			<td><span class="label @if($answer->right_answer)label-success @else label-danger @endif">{{ $answer->answer }}</span></td>
			{{-- <td>{{ $answer->right_answer }}</td> --}}

			<td class="d-i-flex">
				<a class="btn btn-sm btn-primary" href="{{ route('courses.tests.questions.answers.edit',[$course->id, $test_id, $question_id, $answer->id])}} "><i class="fa fa-edit"></i></a>
				{{ Form::open(['method' => 'DELETE', 'route'=> ['courses.tests.questions.answers.destroy', $course->id, $test_id, $question_id, $answer->id]]) }}
				{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
				{{ Form::close() }}
			</td>

		</tr>
		@endforeach	
		@endif
	</tbody>
</table>
<hr>

<h3>Pridat odpoved:</h3>
<input type="hidden" id="test_id" value="{{$test_id}}">
<input type="hidden" id="course_id" value="{{$course->id}}">
{!! Form::open(['method'=>'POST', 'route'=> ['courses.tests.questions.answers.store', $course->id, $test_id, $question_id]]) !!}

	<div class="form-group">
		{!! Form::label('answer', 'Odpoved:') !!}
		{!! Form::text('answer', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('right_answer', 'Spravna odpoved:') !!}
		{!! Form::checkbox('right_answer', '1', false); !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Pridať odpoveď', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}
@stop