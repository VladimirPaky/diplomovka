@extends('layouts.admin')

@section('content')

<h1>Zoznam otázok pre kurz: {{ $course->title }} </h1>
<hr>

<input type="hidden" id="test_id" value="{{$test_id}}">
<input type="hidden" id="course_id" value="{{$course->id}}">


<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>test_id</th>
			<th>question</th>
			<th>type</th>
			<th>Answers</th>
			{{-- <th>show_correct_answers_count</th>
			<th>position</th>
			<th>position_random</th> --}}
		</tr>
	</thead>

	<tbody>
		@if($questions)
		@foreach($questions as $question)
		<tr>
			<td>{{ $question->id }}</td>
			<td>{{ $question->test_id }}</td>
			<td>{{ $question->question }}</td>
			<td>{{ $question->type }}</td>
			<td>
				<ul id="answers_{{$question->id}}">
					@section('answers_' . $question->id)



					@foreach($question->answers->all() as $answer)
					<li>
						<span data-question="{{ $question->id }}" data-id="{{ $answer->id}}" data-answer="{{ $answer->answer }}" class="label edit-answer @if($answer->right_answer)label-success @else label-danger @endif">

							{{ $answer->answer }}
					</li>
					@endforeach

					@show
				</ul>

			</td>

            {{-- <td rowspan="{{ $question->answers()->count() }}">{{ $question->show_correct_answers_count }}</td>
            <td rowspan="{{ $question->answers()->count() }}">{{ $question->position }}</td>
            <td rowspan="{{ $question->answers()->count() }}">{{ $question->position_random }}</td>
            <td rowspan="{{ $question->answers()->count() }}"></td> --}}
        </tr>
        @endforeach	
        @endif
    </tbody>
</table>
@stop