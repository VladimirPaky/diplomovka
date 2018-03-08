@extends('layouts.admin')

@section('content')
<h1>Lekcie kurzu: {{ $course->title }} <a class="btn btn-sm btn-primary" href="{{ route('courses.edit',$course_id)}} "><i class="fa fa-edit"></i></a></h1> 
<hr>
	<div class="">
		<p>{{ $course->description }}</p>	
	</div>
<div class="row">

	<div class="col-md-6">

		<ul class="kurz-info-ul">
			<li class="kurz-info-li"><i class="fa fa-list"></i>&nbsp<p>Kategória:&nbsp</p>{{ $course->category ? $course->category->name : 'Bez ketegórie' }}</li>
			<li class="kurz-info-li"><i class="fa fa-check"></i>&nbsp<p>Forma:&nbsp</p>{{ $course->type }}</li>
			@if($course->city) <li class="kurz-info-li"><i class="fa fa-map-marker"></i>&nbsp<p>Miesto:&nbsp</p>{{ $course->city }} </li>@endif
			<li class="kurz-info-li"><i class="fa fa-user"></i>&nbsp<p>Lektor:&nbsp</p>{{ $course->teacher }}</li>
		</ul>

	</div>

	<div class="col-md-6">

		<ul class="kurz-info-ul">
			{{-- <li><i class="fa fa-user">Kategória: </i>&nbsp<p>Kateg</p>{{ $course->category ? $course->category->name : 'Bez ketegórie' }}</li> --}}
			<li class="kurz-info-li"><i class="fa fa-money"></i>&nbsp<p>Cena:&nbsp</p>{{ $course->price }}</li>
			<li class="kurz-info-li"><i class="fa fa-certificate	"></i>&nbsp<p>Certifikát:&nbsp</p>@if($course->certificate) &nbspAno @else &nbspNie @endif</li>
			<li class="kurz-info-li"><i class="fa fa-info"></i>&nbsp<p>Popis:&nbsp</p>{{ $course->additional_info }}</li>
		</ul>

	</div>

</div>
<div class="row">

<div class="col-md-12">

	@if($lessons)
	<table class="table table-striped">
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
				<td><a href="{{ route('courses.lessons.show',[$course_id, $lesson->id])}} "><i class="fa fa-eye"></i>{{ " " . $lesson->title }}</a></td>
				<td>{{ $lesson->description }}</td>
				<td>{{ $lesson->title }}</td>
				<td>{{ $lesson->created_at ? $lesson->created_at->diffForHumans() : 'Nema dátum'}}</td>
				<td><a class="btn btn-sm btn-primary" href="{{ route('courses.lessons.edit',[$course_id, $lesson->id])}} "><i class="fa fa-edit"></i></a>
					{{ Form::open(['method' => 'DELETE', 'route' => ['courses.lessons.destroy', $course_id, $lesson->id]]) }}
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

<div class="row">
<div class="col-md-12">
	<a class="pull-right btn btn-primary" href="{{route('courses.lessons.create', $course->id)}}"><i class="fa fa-plus">&nbsp</i><i class="fa fa-book"></i> Nová lekcia</a>
</div>

</div>

<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}
</div>

@stop