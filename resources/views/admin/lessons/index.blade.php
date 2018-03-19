@extends('layouts.admin')

@section('content')
<h1>Lekcie kurzu: {{ $course->title }} <a class="btn btn-sm btn-primary" href="{{ route('courses.edit',$course->id)}} "><i class="fa fa-edit"></i></a></h1> 
<hr>


<div class="d-i-flex">
	<p>{{ $course->description }}</p>
</div>
<div class="row well">

	<div class="col-xl-2 col-md-2 col-sm-4 col-xs-6">
		<div class="col-6 d-i-flex"><i class="fa fa-list"></i></div>
		<div class="col-6 d-i-flex"><h5>Kategória</h5></div>
		<div class="col-6"><p>{{ $course->category ? $course->category->name : 'Bez ketegórie' }}</p></div>
	</div>

	<div class="col-xl-2 col-md-2 col-sm-4 col-xs-6">
		<div class="col-6 d-i-flex"><i class="fa fa-check"></i></div>
		<div class="col-6 d-i-flex"><h5>Forma</h5></div>
		<div class="col-6"><p>{{ $course->type }}</p></div>
	</div>
@if($course->city)
	<div class="col-xl-2 col-md-2 col-sm-4 col-xs-6">
		<div class="col-6 d-i-flex"><i class="fa fa-map-marker"></i></div>
		<div class="col-6 d-i-flex"><h5>Mesto</h5></div>
		<div class="col-6"><p>{{ $course->city }}</p></div>
	</div>
@endif

	<div class="col-xl-2 col-md-2 col-sm-4 col-xs-6">
		<div class="col-6 d-i-flex"><i class="fa fa-user"></i></div>
		<div class="col-6 d-i-flex"><h5>Lektor</h5></div>
		<div class="col-6"><p>{{ $course->teacher }}</p></div>
	</div>

	<div class="col-xl-2 col-md-2 col-sm-4 col-xs-6">
		<div class="col-6 d-i-flex"><i class="fa fa-money"></i></div>
		<div class="col-6 d-i-flex"><h5>Cena</h5></div>
		<div class="col-6"><p>{{ $course->price }}</p></div>
	</div>

	<div class="col-xl-2 col-md-2 col-sm-4 col-xs-6">
		<div class="col-6 d-i-flex"><i class="fa fa-certificate"></i></div>
		<div class="col-6 d-i-flex"><h5>Certifikát</h5></div>
		<div class="col-6"><p>@if($course->certificate) &nbspAno @else &nbspNie @endif</p></div>
	</div>

	<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-6 d-i-flex"><i class="fa fa-file-o"></i></div>
		<div class="col-6 d-i-flex"><h5>Poznámky</h5></div>
		<div class="col-6"><p>{{ $course->additional_info }}</p></div>
	</div>

</div>
<div class="row">

	<div class="col-md-12">

		@if($lessons)
		<table id="mojaTabulka" class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Názov</th>
					<th>Popis</th>
					<th>Vytvorená</th>
					<th>Posledná úprava</th>
					<th>Operácie</th>
				</tr>
			</thead>

			<tbody>
				@if($lessons)
				@foreach($lessons as $lesson)
				<tr>
					<td>{{ $lesson->id }}</td>
					<td><a href="{{ route('course.lesson.show',[$course->id, $lesson->id])}} "><i class="fa fa-eye"></i>{{ " " . $lesson->title }}</a></td>
					<td>{{ $lesson->description }}</td>
				
					<td>{{ $lesson->created_at ? $lesson->created_at->diffForHumans() : 'Nema dátum'}}</td>
					<td>{{ $lesson->updated_at ? $lesson->created_at->diffForHumans() : 'Nema dátum'}}</td>
					<td class="d-i-flex"><a class="btn btn-sm btn-primary" href="{{ route('course.lesson.edit',[$course->id, $lesson->id])}} "><i class="fa fa-edit"></i></a>
						{{ Form::open(['method' => 'DELETE', 'route' => ['course.lesson.destroy', $course->id, $lesson->id]]) }}
						{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
						{{ Form::close() }}
					</td>
				</tr>

				@endforeach	
				@endif
			</tbody>
		</table>
		@endif
	</div>

</div>
@if($course->type == "Online") <a class="btn btn-sm btn-primary" href="{{route('courses.tests.questions.index', [$course->id, $course->id])}}">Otazky na test</a> @endif
<div class="row">
	<div class="col-md-12">
		<a class="pull-right btn btn-primary" href="{{route('course.lesson.create', $course->id)}}"><i class="fa fa-plus">&nbsp</i><i class="fa fa-book"></i> Nová lekcia</a>
	</div>

</div>

<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}
</div>

@stop