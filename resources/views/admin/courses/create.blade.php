@extends('layouts.admin')

@section('content')

<h2>Nový používateľ</h2>
<hr>

{!! Form::open(['method'=>'POST', 'route'=> 'admin.course.store']) !!}

	<div class="form-group">
		{!! Form::label('title', 'title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('description', 'description:') !!}
		{!! Form::text('description', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('type', 'type:') !!}
		{!! Form::text('type', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('city', 'city:') !!}
		{!! Form::text('city', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('teacher', 'teacher:') !!}
		{!! Form::text('teacher', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('price', 'price:') !!}
		{!! Form::text('price', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('certificate', 'certificate:') !!}
		{!! Form::text('certificate', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('additional_info', 'additional_info:') !!}
		{!! Form::text('additional_info', null, ['class'=>'form-control'])!!}
	</div>


	<div class="form-group">
		{!! Form::submit('Vytvoriť používateľa', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop