@extends('layouts.admin')

@section('content')
<h1>Editacia kategórie článku: {{$postCategories->name}}</h1>
<hr>

<div class="col-md-6">

	{!! Form::model($postCategories, ['method'=>'PATCH', 'action'=> ['AdminPostCategoriesController@update', $postCategories->id]]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Meno:') !!}
		{!! Form::text('name', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať kategóriu', ['class'=>'btn btn-primary']) !!}
	</div>
</div>

<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}

</div>

@stop