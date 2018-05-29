@extends('layouts.admin')


@section('styles')

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">

@stop


@section('content')
	<h1>Banneri</h1>
	<hr>

	<div class="col-md-6">

		@if($banners)
			<table id="mojaTabulka" class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Kategória</th>
						{{-- <th>Vytvorená</th> --}}
						<th>Operácie</th>
					</tr>
				</thead>

				<tbody>
					@if($banners)
						@foreach($banners as $banner)
							<tr>
								<td>{{ $banner->id }}</td>
								<td class="d-i-flex">
									{{ Form::open(['method' => 'DELETE', 'route' => ['banners.destroy', $banner->id]]) }}
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

<div class="col-md-6">
	
	{!! Form::open(['method'=>'POST', 'action'=> 'AdminBannerController@store', 'class'=>'dropzone'])!!}

	{!! Form::close() !!}
	
@stop

@section('scripts')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>

@stop