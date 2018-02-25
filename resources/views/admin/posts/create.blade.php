@extends('layouts.admin')

@section('content')

	<h1>Vytvoriť nový článok</h1>
	<hr>

<div class="row">
	{!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true])!!}


	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>


    <div class="form-group">
    	{!! Form::label('category_id', 'Ketgória:') !!}
    	{{-- {!! Form::select('category_id', array(1=>'Lesnícstvo', 2=>'Zahrada'), null, ['class'=>'form-control'])!!} --}}
    	{!! Form::select('category_id', [''=>'Zvolte ketegóriu'] + $postCategory, null, ['class'=>'form-control'])!!}
    </div>

     <div class="form-group">
        {!! Form::label('photo_id', 'Obrázok:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
     </div>

     <div class="form-group">
		{!! Form::label('body', 'Obsah') !!}
		{!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>15])!!}
	</div>

	<div class="form-group">
		{!! Form::submit('Vytvoriť článok', ['class'=>'btn btn-primary']) !!}
	</div>
</div>

<div class="row">
	
	@include('includes.form_error')

</div>	

{!! Form::close() !!}

@stop