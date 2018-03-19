@extends('layouts.admin')

@section('content')

<h2>Úprava odpovede</h2>
<hr>

{!! Form::model($answer, ['method'=>'PATCH', 'route'=> ['courses.tests.questions.answers.update', $course_id, $test_id, $question_id, $answer->id ]]) !!}
	
	<div class="form-group">
		{!! Form::label('answer', 'Odpoved:') !!}
		{!! Form::text('answer', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('right_answer', 'Spravna odpoved:') !!}
		{!! Form::checkbox('right_answer', '1', false); !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať odpoved', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>

{!! Form::close() !!}

@stop