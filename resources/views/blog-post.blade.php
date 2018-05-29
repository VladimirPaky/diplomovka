@extends('layouts.portal')

@section('content')

<div class="col">
	<div class="col-md-12">
	@foreach($posts as $post)

	<div class=" col-md-12" style="margin-top: 30px">
		{{-- <div><img src="{{ $post->photo ? photo()->getFileUrl() }}"></div> --}}
		{{-- <div class="post-image"><a href="text.html">
			<img src="{{ $post->photo ? $post->photo->getFileUrl() : 'http://placehold.it/200?text=Nema+fotku' }}" alt="" class="img-responsive"></a></div> --}}
		<h1 style="display: inline-block;">{{ $post->title }}</h1>
		<h5 style="display: inline-block; color: #999">{{ $post->category->name }}</h5>
		{!! $post->body !!}
	</div>
	@endforeach
<div class="clearfix"></div>

</div>
@endsection
