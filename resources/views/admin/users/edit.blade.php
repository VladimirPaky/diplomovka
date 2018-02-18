@extends('layouts.admin')

@section('content')

<h2>Editovanie používateľa: <span style="color: blue">{{$user->name}}</span></h2>
<hr>

<div class="col-xs col-md-3">
<img class="img-responsive img-circle" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400/333/ccc?text=Nema+fotku'}}">
</div>

<div class="col-xs col-md-9">
{!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}


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
        {!! Form::select('is_active', array(1 => 'Aktivovaný', 0=> 'Neaktivovaný'), null , ['class'=>'form-control'])!!}
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
		{!! Form::submit('Aktualizovať používateľa', ['class'=>'btn btn-primary']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}

</div>
@stop