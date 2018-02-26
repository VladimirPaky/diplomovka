@extends('layouts.admin')

@section('content')
	<h1>Kategórie článkov</h1>
	<hr>

	<div class="col-md-6">

		@if($postCategories)
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Meno</th>
						<th>Vytvorená</th>
						<th>Operácie</th>
					</tr>
				</thead>

				<tbody>
					@if($postCategories)
						@foreach($postCategories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->created_at ? $category->created_at->diffForHumans() : 'Nema dátum'}}</td>
								<td><a href="{{ route('admin.post-categories.edit', $category->id)}} "><i class="fa fa-edit"></i></a>
									{{ Form::open(['method' => 'DELETE', 'route' => ['admin.post-categories.destroy', $category->id]]) }}
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
	
	{!! Form::open(['method'=>'POST', 'action'=> 'AdminPostCategoriesController@store'])!!}

		<div class="form-group">
			{!! Form::label('name', 'Meno:') !!}
			{!! Form::text('name', null, ['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit('Vytvoriť kategóriu', ['class'=>'btn btn-primary']) !!}
		</div>
	</div>

	<div class="row">
		
		@include('includes.form_error')

	</div>	

	{!! Form::close() !!}
</div>
	
@stop