@extends('layouts.admin')

@section('content')

<h1>Prihlasky na kurz</h1>
<hr>
<div id="no-more-tables">
<table id="mojaTabulka" class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Prihlaseny</th>
			<th>Kurz</th>
			<th>Platba</th>
			<th>Pristup do kurzu</th>
			<th>Operácie</th>
		</tr>
	</thead>

	<tbody>
		@if($courseApplications)
		@foreach($courseApplications as $application)
		<tr>
			<td>{{ $application->id }}</td>
			<td>{{ $application->user_id}}</td>
			<td>{{ $application->course_id	}}</td>
			<td><span class="label @if($application->payment)label-success @else label-danger @endif">{{ $application->payment == '1' ? 'Zaplatene' : 'Nezaplatane' }}</span></td>
			<td><span class="label @if($application->access)label-success @else label-danger @endif">{{ $application->access == '1' ? 'Povoleny' : 'Nepovoleny' }}</span></td>
			<td class="d-i-flex">
				<a class="btn btn-sm btn-primary" href="{{route('applications.edit', [$application->id, $application->course_id]) }}"><i class="fa fa-edit"></i></a>
				
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