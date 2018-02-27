@extends('layouts.admin')

@section('styles')

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">

@stop



@section('content')

	<h1>Media</h1>
	<hr>

	{!! Form::open(['method'=>'POST', 'action'=> 'AdminMediaController@store', 'class'=>'dropzone'])!!}



	{!! Form::close() !!}


	
@stop




@section('scripts')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>

@stop