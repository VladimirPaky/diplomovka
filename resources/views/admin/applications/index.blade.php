@extends('layouts.admin')

@section('content')

<h1>Prihlsky na kurz {{$course->title}}</h1>
<hr>
<div id="no-more-tables">
<table id="mojaTabulka" class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Prihlaseny</th>
			<th>Platba</th>
			<th>Pristup do kurzu</th>
			<th>Operácie</th>
		</tr>
	</thead>

	<tbody>
		@if($applications)
		@foreach($applications as $application)
		<tr>
			<td>{{ $application->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $application->category ? $application->category->name : 'Bez ketegórie' }}</td>
			<td>{{ $application->payment == 1 ? "Ano" : "Nie"}}</td>
			<td>{{ $application->access == 1 ? "Ano" : "Nie"}}</td>
			<td class="d-i-flex">
				<a class="btn btn-sm btn-primary" href="{{route('applications.edit', $application->id)}}"><i class="fa fa-edit"></i></a>
				
				{{ Form::open(['method' => 'DELETE', 'route' => ['applications.destroy', $application->id]]) }}
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