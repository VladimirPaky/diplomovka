@extends('layouts.portal')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2 style="margin-bottom: 30px;">{{$course->title}}</h2>

		{!! Form::open(['method'=>'POST', 'route'=> ['signtocourse', $course->id]]) !!}

		<div class="form-group">
			@if($user_has_this_course == false)
				{!! Form::submit('Prihlasiť sa na kurz', ['class'=>'btn btn-primary']) !!}
			@endif
		</div>

		{!! Form::close() !!}

		<hr>
		<h4 style="margin-bottom: 30px;">Zoznam lekcii</h4>



		@if($lessons)
		<div class="row">
			<div class="col-md-12">
				<ul class="course-lesson-list">
					@foreach($lessons as $lesson)
					<li>
						<div class="col-md-12 well">
							<div class="col-12">
								
								<a href="{{ route('lesson.show', $lesson->id)}}"><h3>{{$lesson->title }}</h3></a>
							</div>
							<div class="col-12">
								{{ $lesson->description }}
							</div>
						</div>
					</li>
					@endforeach	
				</ul>
			</div>
			
			@if(Auth::user())

				<a class="btn btn-ghost" href="{{ route('startTest', $course->id) }}" style="margin-bottom: 25px;">TEST</a>

			@endif

		</div>
		@endif

	</div>
	@endsection
