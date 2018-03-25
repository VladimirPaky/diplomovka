@extends('layouts.portal')

@section('content')

{{-- {!! Form::open(['method'=>'GET', 'route'=> ['filterCourses', $courseCategories->id]]) !!} --}}




<div class="col">
	<h2>Kurzy</h2>

{!! Form::open(['method'=>'GET', 'route'=> 'allCourses']) !!}

<div class="form-group">
	{!! Form::label('category_id', 'Ketgória:') !!}
	{!! Form::select('category_id', [''=>'Zvolte ketegóriu'] + $courseCategories, null, ['class'=>'form-control'])!!}
</div>

	<div class="form-group">
		{!! Form::submit('Filter', ['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

<br>

	@foreach($courses as $course)
<div class="col"></div>
	<div class=" col-md-3 course post">
		<div class="image"><a href="text.html"><img src="{{ $course->photo->getFileUrl()}}" alt="" class="img-responsive"></a></div>
		<h3>{{ $course->title }}</h3>
		<h5>{{ $course->category->name }}</h5>
		<p class="post__intro">{{ str_limit($course->description, 100) }}</p>
		<h4 class="label label-success price">{{ $course->price }}</h4>
		<p class="read-more"><a class="btn btn-ghost" href="{{route('course.lessons.index', $course->slug)}}">Viac</a></p>
	</div>
@endforeach
<div class="clearfix"></div>
{{ $courses->links() }}
<div class="clearfix"></div>


</div>
@endsection
