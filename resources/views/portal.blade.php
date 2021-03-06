@extends('layouts.portal-home')

@section('content')
<div class="col">
	<h2>Kurzy</h2>
	@foreach($courses as $course)
<div class="col"></div>
	<div class=" col-md-3 course post">
		<div class="image"><a href="{{route('course.lessons.index', $course->slug)}}"><img src="{{ $course->photo ? $course->photo->getFileUrl() : 'http://placehold.it/200?text=Nema+fotku' }}" alt="" class="img-responsive"></a></div>
		<h3>{{ $course->title }}</h3>
		<h5>{{ $course->category->name }}</h5>
		<p class="post__intro">{{ str_limit($course->description, 100) }}</p>
		<h4 class="label label-success price">{{ $course->price }}</h4>
		<p class="read-more"><a class="btn btn-ghost" href="{{route('course.lessons.index', $course->slug)}}">Viac</a></p>
	</div>
@endforeach
<div class="clearfix"></div>

<div class="clearfix"></div>

	<h2>Blog</h2>
	<div class="col-md-12">
	@foreach($posts as $post)

	<div class=" col-md-3 post">
		{{-- <div><img src="{{ $post->photo ? photo()->getFileUrl() }}"></div> --}}
		<div class="image"><a href="{{route('blogPost', $post->id)}}">
			<img src="{{ $post->photo ? $post->photo->getFileUrl() : 'http://placehold.it/200?text=Nema+fotku' }}" alt="" class="img-responsive"></a></div>
		<h3>{{ $post->title }}</h3>
		<h5>{{ $post->category->name }}</h5>
		{{-- <p class="post__intro">{{ str_limit($course->description, 100) }}</p> --}}
		
		<p class="read-more"><a href="{{route('blogPost', $post->id)}}" class="btn btn-ghost">Viac</a></p>
	</div>



	@endforeach
</div>

</div>
@endsection
