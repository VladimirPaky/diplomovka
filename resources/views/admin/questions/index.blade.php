@extends('layouts.admin')

@section('content')

<h1>Zoznam otázok pre kurz: {{ $course->title }} </h1>
<hr>

<input type="hidden" id="test_id" value="{{$test_id}}">
<input type="hidden" id="course_id" value="{{$course->id}}">


<table id="mojaTabulka" class="table">
	<thead>
		<tr>
			<th>ID</th>
			{{-- <th>test_id</th> --}}
			<th>Otazka</th>
			{{-- <th>type</th> --}}
			<th>Odpovede</th>
			{{-- <th>show_correct_answers_count</th>
			<th>position</th>
			<th>position_random</th> --}}
			<th>Operacie</th>
		</tr>
	</thead>

	<tbody>
		@if($questions)
		@foreach($questions as $question)
		<tr>
			<td>{{ $question->id }}</td>
			{{-- <td>{{ $question->test_id }}</td> --}}
			<td>{{ $question->question }}</td>

			{{-- <td>{{ $question->type }}</td> --}}
			<td>
				<ul id="answers_{{$question->id}}">
					@section('answers_' . $question->id)

					@foreach($question->answers->all() as $answer)
					<li>
						<span data-question="{{ $question->id }}" data-id="{{ $answer->id}}" data-answer="{{ $answer->answer }}" class="label edit-answer @if($answer->right_answer)label-success @else label-danger @endif">{{ $answer->answer }}</span>
					</li>

					@endforeach	
					<a class="" href="{{route('courses.tests.questions.answers.index', [$course->id, $test_id, $question->id])}}"><i class="fa fa-plus"> Manazovat odpovede</i></a>

					@show
				</ul>	

			</td>
			<td class="d-i-flex">
				<a class="btn btn-sm btn-primary" href="{{route('courses.tests.questions.edit', [$course->id, $test_id, $question->id])}}"><i class="fa fa-edit"></i></a>

				{{ Form::open(['method' => 'DELETE', 'route' => ['courses.tests.questions.destroy', $course->id, $test_id, $question->id]]) }}
				{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
				{{ Form::close() }}
				
			</td>	
		</tr>
		@endforeach	
		@endif
	</tbody>
</table>
<br>
<a class="btn btn-primary btn-sm pull-right" href="{{ route('courses.tests.questions.create',[$course->id, $test_id])}}">Pridat otazku</a>
@stop