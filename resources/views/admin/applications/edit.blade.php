@extends('layouts.admin')

@section('content')

<h2>Úprava kurz</h2>
<hr>

{!! Form::model($course, ['method'=>'PATCH', 'action'=> ['AdminCourseController@update', $course->id]]) !!}

	<div class="form-group">
		{!! Form::label('user_id', 'Nazov:') !!}
		{!! Form::text('user_id', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('course_id', 'Nazov:') !!}
		{!! Form::text('course_id', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať kurz', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop