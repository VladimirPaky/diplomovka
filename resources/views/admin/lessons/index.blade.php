@extends('layouts.admin')

@section('content')
<h1>Lekcie</h1>
<hr>

<div class="col-md-12">

	@if($lessons)
	<table class="table">
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
				<td>{{ $lesson->title }}</td>
				<td>{{ $lesson->description }}</td>
				<td>{{ $lesson->title }}</td>
				<td>{{ $lesson->created_at ? $lesson->created_at->diffForHumans() : 'Nema dátum'}}</td>
				<td><a href="{{ route('admin.lessons.edit', $lesson->id)}} "><i class="fa fa-edit"></i></a>
					{{ Form::open(['method' => 'DELETE', 'route' => ['admin.lessons.destroy', $lesson->id]]) }}
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

<div class="row">

	@include('includes.form_error')

</div>	

{!! Form::close() !!}
</div>

@stop