@extends('layouts.admin')

@section('content')

@include('includes.tinymce')

<h1>Editacia lekcie: {{$lesson->title}}</h1>

<hr>
	{!! Form::model($lesson, ['method'=>'PATCH', 'route'=> ['courses.lessons.update', $course_id, $lesson->id ]]) !!}

	<div class="form-group">
		{!! Form::label('title', 'Nazov:') !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!}
	</div>

    <div class="form-group">
    	{!! Form::label('description', 'Popis:') !!}
    	{!! Form::text('description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
		{!! Form::label('content', 'Obsah:') !!}
		{!! Form::textarea('content', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať lekciu', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>


<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}

</div>

@stop