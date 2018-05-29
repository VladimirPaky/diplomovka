@extends('layouts.admin')

@section('content')

<h1>Vysledky testov</h1>
<hr>

<div style="margin-bottom: 10px; display: flex; flex-direction: column; align-items: start;">
	<p>Legenda:</p>
	<span style="font-size: 13px; margin-bottom: 4px;" class="label label-success">Test zvladnúty s vysledkom nad 60%</span>

<span style="font-size: 13px" class="label label-danger">Test nezvládnutý, vysledok menej ako 60%</span>
</div>



<table id="mojaTabulka" class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Používateľ</th>
			<th>Kurz</th>
			<th>Výsledok</th>
		</tr>
	</thead>

	<tbody>
		@if($results)
		@foreach($results as $result)

		<tr style="display: none">
			<td>{{$tempRes = $result->result}}</td>
		</tr>

		<tr>
			<td>{{ $result->id }}</td>

			<td>{{ $result->user()->name}}</td>
			<td>{{ $result->course()->title}}</td>
			<td>
				<span style="font-size: 13px;" class="label @if($tempRes>60)label-success @else label-danger @endif">{{$result->result}}%</span>
			</td>	
		</tr>
		@endforeach	
		@endif
	</tbody>
</table>

@stop