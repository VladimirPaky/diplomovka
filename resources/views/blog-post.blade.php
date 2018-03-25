@extends('layouts.portal')

@section('content')

<h3>FILTER: dropdown kategoria >> GO</h3>
<div class="col">
	<div class="col-md-12">
	@foreach($posts as $post)

	<div class=" col-md-12">
		{{-- <div><img src="{{ $post->photo ? photo()->getFileUrl() }}"></div> --}}
		<div class="post-image"><a href="text.html">
			<img src="{{ $post->photo->getFileUrl()}}" alt="" class="img-responsive"></a></div>
		<h1>{{ $post->title }}</h1>
		<h5>{{ $post->category->name }}</h5>
		{!! $post->body !!}
	</div>



	@endforeach
<div class="clearfix"></div>




</div>
@endsection
