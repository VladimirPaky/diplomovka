@extends('layouts.admin')

@section('content')

<h2>Úprava otazky</h2>
<hr>


<input type="hidden" id="test_id" value="{{$test_id}}">
<input type="hidden" id="course_id" value="{{$course_id}}">

{!! Form::model($question, ['method'=>'PATCH', 'route'=> ['courses.tests.questions.update', $course_id, $test_id, $question->id]]) !!}

	<div class="form-group">
		{!! Form::label('question', 'otazka:') !!}
		{!! Form::text('question', null, ['class'=>'form-control'])!!}
	</div>

{{-- 	<div class="form-group">
		{!! Form::label('position', 'position') !!}
		{!! Form::text('position', '0', ['class'=>'form-control'])!!}
	</div> --}}

	<div class="form-group">
		{!! Form::submit('Aktualizovat otazku', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop