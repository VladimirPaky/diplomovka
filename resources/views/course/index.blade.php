@extends('layouts.portal')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>{{$course->title}}</h2>

		{!! Form::open(['method'=>'POST', 'route'=> ['signtocourse', $course->id]]) !!}

		<div class="form-group">
			{!! Form::submit('Prihlasiť sa a kurz', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

		<hr>
		<h4>Zoznam lekcii</h4>



		@if($lessons)
		<div class="row">
			<div class="col-md-12">
				<ul class="course-lesson-list">
					@foreach($lessons as $lesson)
					<li>
						<div class="col-md-12 well">
							<div class="col-12">
								<h3>{{$lesson->title }}</h3>
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

				<a class="btn btn-ghost" href="{{ route('startTest', $course->id) }}">TEST</a>

			@endif

		</div>
		@endif

	</div>
	@endsection
