@extends('layouts.admin')

@section('content')

<h1>Vysledky testov</h1>
<hr>

<table id="mojaTabulka" class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Pouzivatel</th>
			<th>Kurz</th>
			<th>Vysledok</th>
		</tr>
	</thead>

	<tbody>
		@if($results)
		@foreach($results as $result)
		<tr>
			<td>{{ $result->id }}</td>

			<td>{{ $result->user_id}}
			<td>{{ $result->course_id}}
			<td>{{ $result->result}}
		</tr>
		@endforeach	
		@endif
	</tbody>
</table>

@stop