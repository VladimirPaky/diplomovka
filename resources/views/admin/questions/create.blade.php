@extends('layouts.admin')

@section('content')

<h2>Nová otázka</h2>
<hr>

{!! Form::open(['method'=>'POST', 'route'=> ['courses.tests.questions.store', $course_id, $test_id]]) !!}

	<div class="form-group">
		{!! Form::label('question', 'otazka:') !!}
		{!! Form::text('question', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('position', 'position') !!}
		{!! Form::text('position', '0', ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Vytvoriť otazku', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop