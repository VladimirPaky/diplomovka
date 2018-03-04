@extends('layouts.admin')

@section('content')

<h2>Nová lekcia</h2>
<hr>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminCourseLessonsController@store']) !!}


	<div class="form-group">
		{!! Form::label('title', 'Nazov:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
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
		{!! Form::submit('Vytvoriť lekciu', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop