@extends('layouts.admin')

@section('content')

<h2>Nový kurz</h2>
<hr>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminCourseController@store']) !!}

	<div class="form-group">
		{!! Form::label('title', 'Nazov:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Vytvoriť odpoveď', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop