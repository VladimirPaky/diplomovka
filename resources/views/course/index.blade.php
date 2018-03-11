@extends('layouts.portal-home')

@section('content')
<div class="row">
	<div class="col">
		<div class="col-md-12">
			<h2>{{$course->title}}</h2>

{!! Form::open(['method'=>'POST', 'action'=> 'UserCourseApplication@store']) !!}

	<div class="form-group">
		{!! Form::submit('Prihlasiť sa a kurz', ['class'=>'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

			<hr>
			<h4>Zoznam lekcii</h4>

			@if($lessons)
			<div class="row">
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
				</ul>
			</div>
			@endforeach	

			@endif
		</div>
	</div>

</div>
@endsection
