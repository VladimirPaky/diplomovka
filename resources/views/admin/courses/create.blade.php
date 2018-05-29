@extends('layouts.admin')

@section('content')

<h2>Nový kurz</h2>
<hr>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminCourseController@store', 'files'=>true]) !!}

	<div class="form-group">
		{!! Form::label('title', 'Názov:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Popis:') !!}
		{!! Form::text('description', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('category_id', 'Ketgória:') !!}
			{!! Form::select('category_id', [''=>'Zvolte ketegóriu'] + $courseCategories, null, ['class'=>'form-control'])!!}
    </div>

	<div class="form-group">
		{!! Form::label('type', 'Typ:') !!}
		{!! Form::text('type', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('city', 'Mesto:') !!}
		{!! Form::text('city', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('region_id', 'Region:') !!}
		{!! Form::select('region_id', [''=>'Zvolte region'] + $courseRegions, null, ['class'=>'form-control'])!!}
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
		{!! Form::text('certificate', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('additional_info', 'Dodatočné info:') !!}
		{!! Form::text('additional_info', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Vytvoriť kurz', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop