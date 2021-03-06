@extends('layouts.admin')

@section('content')
<h1>Editacia kategórie kurzov: {{$courseCategories->name}}</h1>
<hr>

<div class="col-md-6">

	{!! Form::model($courseCategories, ['method'=>'PATCH', 'action'=> ['AdminCourseCategoriesController@update', $courseCategories->id]]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Meno:') !!}
		{!! Form::text('name', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať kategóriu', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>
</div>

<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}

</div>

@stop