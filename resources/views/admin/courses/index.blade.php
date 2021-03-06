@extends('layouts.admin')

@section('content')

<h1>Zoznam kurzov</h1>
<hr>
<div id="no-more-tables">
<table id="mojaTabulka" class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Názov</th>
			{{-- <th>Popis</th> --}}
			<th>Kategória</th>
			<th>Forma</th>
			<th>Mesto</th>
			<th>Region</th>
			<th>Lektor</th>
			<th>Cena</th>
			<th>Certifikat</th>
			{{-- <th>Dodatočné info</th> --}}
			{{-- <th>Vytvorený</th> --}}
			{{-- <th>Aktualizované</th> --}}
			<th>Operácie</th>
		</tr>
	</thead>

	<tbody>
		@if($courses)
		@foreach($courses as $course)
		<tr>
			<td>{{ $course->id }}</td>
			<td><a href="{{route('course.lesson.index', $course->slug)}}">{{ $course->title }}</i></a></td>

			{{-- <td>{{ str_limit($course->description, 20) }}</td> --}}
			<td>{{ $course->category ? $course->category->name : 'Bez ketegórie' }}</td>
			<td>{{ $course->type }}</td>
			<td>{{ $course->city }}</td>
			<td>{{ $course->region->region }}</td>
			<td>{{ $course->teacher }}</td>
			<td>{{ $course->price }}</td>
			<td>{{ $course->certificate == 1 ? "Ano" : "Nie"}}</td>
			{{-- <td>{{ str_limit($course->additional_info, 20) }}</td> --}}

			{{-- <td>{{ $course->created_at . " (" . $course->created_at->diffForHumans() . ")" }}</td> --}}
			{{-- <td>{{ $course->updated_at . " (" . $course->updated_at->diffForHumans() . ")"}}</td> --}}
			<td class="d-i-flex">
				<a class="btn btn-sm btn-primary" href="{{route('courses.edit', $course->id)}}"><i class="fa fa-edit"></i></a>
				
				{{ Form::open(['method' => 'DELETE', 'route' => ['courses.destroy', $course->id]]) }}
				{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-round btn-danger btn-sm delete-link'] )  }}
				{{ Form::close() }}

			</td>
		
		</tr>
		@endforeach	
		@endif
	</tbody>
</table>
</div>
@stop