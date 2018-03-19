@extends('layouts.portal')

@section('content')
<div class="row">
	<div class="col">
		<div class="col-md-12">
			<h2>Test</h2>

{!! Form::open(['method'=>'POST', 'route'=> ['submit_test', $test_id]]) !!}
			@if($questions)
			
			@foreach($questions as $question)
				<div class="well">
					<h4>{{$question->question}}</h4>
				@foreach($question->answers as $answer)
				<div class="form-group">
					{!! Form::label('answer', $answer->answer) !!}
					{!! Form::checkbox('answers[' . $question->id . '][' . $answer->id . ']', '1', false); !!}
				</div>
				
				@endforeach
				</div>

				
			@endforeach

			@endif

			{{ Form::submit('Save', array('class' => 'btn')) }}

{!! Form::close() !!}

<div class="row">


		</div>
	</div>

</div>
@endsection
