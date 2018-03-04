@extends('layouts.admin')

@section('content')

<h1>Editacia lekcie: {{$lesson->title}}</h1>

<hr>



	{!! Form::model($lesson, ['method'=>'PATCH', 'action'=> ['AdminCourseLessonsController@update', $lesson->id]]) !!}

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
		{!! Form::text('content', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať lekciu', ['class'=>'btn btn-primary']) !!}
	</div>


<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}

</div>

@stop