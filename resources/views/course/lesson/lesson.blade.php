@extends('layouts.portal')

@section('content')
<div class="row">
	<div class="col-md-12">
		{{-- <h2>{{$course->title}}</h2> --}}


		<hr>
				<div class="col-12">
					<h3>{{$lesson->title }}</h3>
				</div>
				<div class="col-12">
					{{ $lesson->contet }}
				</div>




	</div>
	@endsection
