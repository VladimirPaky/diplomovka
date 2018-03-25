@extends('layouts.admin')

@section('content')

<h2>Úprava kurzu: {{ $course->title}}</h2>
<hr>

{!! Form::model($course, ['method'=>'PATCH', 'action'=> ['AdminCourseController@update', $course->id]]) !!}

	<div class="form-group">
		{!! Form::label('title', 'Nazov:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Popis:') !!}
		{!! Form::text('description', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('category_id', 'Ketgória:') !!}
			{!! Form::select('category_id', $courseCategories, null, ['class'=>'form-control'])!!}
    </div>

	<div class="form-group">
		{!! Form::label('type', 'Typ:') !!}
		{!! Form::select('type', ['Online' => 'Online', 'Skolenie'=>'Skolenie'],null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('city', 'Mesto:') !!}
		{!! Form::text('city', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('region_id', 'Region:') !!}
		{!! Form::select('region_id', $courseRegions, null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
	    {!! Form::label('photo_id', 'Obrázok:') !!}
	    {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('teacher', 'Lektor:') !!}
		{!! Form::text('teacher', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('price', 'Cena:') !!}
		{!! Form::text('price', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('certificate', 'Certifikát:') !!}
		{!! Form::select('certificate', ['1' => 'Ano', '0'=>'Nie'],null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('additional_info', 'Dodatočné info:') !!}
		{!! Form::text('additional_info', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať kurz', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop