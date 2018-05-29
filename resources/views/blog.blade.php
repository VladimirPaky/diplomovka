@extends('layouts.portal')

@section('content')


<div class="col">
	<h2>Blog</h2>

	{!! Form::open(['method'=>'GET', 'route'=> 'blog']) !!}

<div class="form-group">
	{!! Form::label('category_id', 'Ketgória:') !!}
	{!! Form::select('category_id', [''=>'Zvolte ketegóriu'] + $courseCategories, null, ['class'=>'form-control'])!!}
</div>

	<div class="form-group">
		{!! Form::submit('Filter', ['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}



	<div class="col-md-12">
	@foreach($posts as $post)

	<div class=" col-md-3 post">
		{{-- <div><img src="{{ $post->photo ? photo()->getFileUrl() }}"></div> --}}
		<div class="image"><a href="text.html">
			<img src="{{ $post->photo ? $post->photo->getFileUrl() : 'http://placehold.it/200?text=Nema+fotku' }}" alt="" class="img-responsive"></a></div>
		<h3>{{ $post->title }}</h3>
		<h5>{{ $post->category->name }}</h5>
		{{-- <p class="post__intro">{{ str_limit($course->description, 100) }}</p> --}}
		
		<p class="read-more"><a href="{{route('blogPost', $post->id)}}" class="btn btn-ghost">Viac</a></p>
	</div>



	@endforeach
<div class="clearfix"></div>
{{ $posts->links() }}



</div>
@endsection
