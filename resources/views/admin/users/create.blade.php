@extends('layouts.admin')

@section('content')

<h2>Nový používateľ</h2>
<hr>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}


	<div class="form-group">
		{!! Form::label('name', 'Meno:') !!}
		{!! Form::text('name', null, ['class'=>'form-control'])!!}
	</div>

    <div class="form-group">
    	{!! Form::label('email', 'Email:') !!}
    	{!! Form::email('email', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Rola:') !!}
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Aktívny', 0=> 'Neaktívny'), 0 , ['class'=>'form-control'])!!}
     </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Obrázok:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
     </div>

    <div class="form-group">
        {!! Form::label('password', 'Heslo:') !!}
        {!! Form::password('password', ['class'=>'form-control'])!!}
     </div>

	<div class="form-group">
		{!! Form::submit('Vytvoriť používateľa', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop