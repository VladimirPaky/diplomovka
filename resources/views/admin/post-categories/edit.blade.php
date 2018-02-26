@extends('layouts.admin')

@section('content')
	<h1>Editacia Kategórie článkov</h1>
	<hr>

<div class="col-md-6">

	{!! Form::model(['method'=>'PATCH', 'action'=> 'AdminPostCategoriesController@update'])!!}

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