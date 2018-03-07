@extends('layouts.admin')

@section('content')
	<h1>Kategórie kurzov</h1>
	<hr>

	<div class="col-md-6">

		@if($courseCategories)
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
					@if($courseCategories)
						@foreach($courseCategories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->created_at ? $category->created_at->diffForHumans() : 'Nema dátum'}}</td>
								<td><a class="btn btn-sm btn-primary" href="{{ route('admin.course-categories.edit', $category->id)}} "><i class="fa fa-edit"></i></a>
									{{ Form::open(['method' => 'DELETE', 'route' => ['admin.course-categories.destroy', $category->id]]) }}
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
	
	{!! Form::open(['method'=>'POST', 'action'=> 'AdminCourseCategoriesController@store'])!!}

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