@extends('layouts.admin')

@section('content')

	<h1>Editcia článku: <span style="color: blue">{{$post->title . " (".  $post->id . ")"}}</span></h1>
	<hr>

<div class="">
	<img class="img-responsive" src="{{ $post->photo->file}}">
	<br>
</div>


<div class="row">
	{!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=>true])!!}

	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>

    <div class="form-group">
    	{!! Form::label('category_id', 'Ketgória:') !!}
    	{{-- {!! Form::select('category_id', array(1=>'Lesnícstvo', 2=>'Zahrada'), null, ['class'=>'form-control'])!!} --}}
    	{!! Form::select('category_id', $postCategory, null, ['class'=>'form-control'])!!}
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
		{!! Form::submit('Vytvoriť článok', ['class'=>'btn btn-primary save-edit-link']) !!}
	</div>

</div> {{-- ./ row --}}
	
<div class="row">
	
	@include('includes.form_error')

</div>	

{!! Form::close() !!}


{{-- DELETE BUTTON --}}

{!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id ]]) !!}
    {{ Form::button('<i class="fa fa-trash"></i> Vymazť článok', ['type' => 'submit', 'class' => 'btn btn-danger delete-link'] )  }}
{{ Form::close() }}


@stop