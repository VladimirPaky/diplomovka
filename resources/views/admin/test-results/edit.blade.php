@extends('layouts.admin')

@section('content')

<h2>Úprava prihlasky</h2>
<hr>

{!! Form::model($application, ['method'=>'PATCH', 'action'=> ['AdminCourseApplicationsController@update', $application->id]]) !!}

	<div class="form-group">
		{!! Form::label('user_id', 'Pouzivatel:') !!}
		{!! Form::text('user_id', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('course_id', 'Kurz:') !!}
		{!! Form::text('course_id', null, ['class'=>'form-control'])!!}
	</div>

	 <div class="form-group">
        {!! Form::label('payment', 'Platba:') !!}
        {!! Form::select('payment', array('1' => 'Zaplatane', '0' => 'Nezaplatene'), null , ['class'=>'form-control']) !!}
     </div>

	 <div class="form-group">
        {!! Form::label('access', 'Pristup:') !!}
        {!! Form::select('access', array('1' => 'Povoleny', '0' => 'Nepovoleny'), null , ['class'=>'form-control']) !!}
     </div>

	<div class="form-group">
		{!! Form::submit('Aktualizovať prihlasku', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>

	@include('includes.form_error')

{!! Form::close() !!}


@stop