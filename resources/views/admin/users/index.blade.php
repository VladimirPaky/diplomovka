@extends('layouts.admin')

@section('content')
	
	@if(Session::has('deleted_user'))
		<p class="bg-danger">{{ session("deleted_user") }}</p>
	@endif

	@if(Session::has('added_user'))
		<p class="bg-success">{{ session("added_user") }}</p>
	@endif

	@if(Session::has('edited_user'))
		<p class="bg-info">{{ session("edited_user") }}</p>
	@endif

  <h2>Zoznam používateľov</h2>
  <hr>
          
<table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Obrázok</th>
    <th>Meno</th>
    <th>Email</th>
    <th>Rola</th>
    <th>Stav</th>
    <th>Vytvorený</th>
    <th>Aktualizovaný</th>
    <th>Operácie</th>
  </tr>
</thead>
<tbody>

	@if($users)
		@foreach($users as $user)
			<tr>
		        <td>{{ $user->id }}</td>
		        <td><img height=30 class="img-circle" src="{{ $user->photo ? $user->photo->getFileUrl() : 'http://placehold.it/30/333/ccc?text=Nema+fotku' }}"></td>
		        <td>{{ $user->name }}</td>
		        <td>{{ $user->email }}</td>
		        <td>{{ $user->role->name }}</td>
		        <td>{{ $user->is_active = 1 ? 'Aktivovaný' : 'Neaktivovaný' }}</td>
		        <td>{{ $user->created_at}} ({{ $user->created_at->diffForHumans() }})</td>
		        <td>{{ $user->updated_at}} ({{ $user->updated_at->diffForHumans() }})</td>
		        <td>
		        	<a href="{{route('admin.users.edit', $user->id)}}"><i class="fa fa-edit"></i></a>

		        	{{-- IF MAIN ADMIN NAME = admin, DO NOT DISPLAY DELETE BUTTON --}}
		        	@if($user->name == "admin")
		        	{{-- DO NOTHING --}}
		        	@else
			        	{{ Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id]]) }}
			                {{-- {{ Form::submit('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger']) }} --}}
			                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
			            {{ Form::close() }}
		            @endif	
		        </td>
		      </tr>
		@endforeach
	@endif

</tbody>
</table>



@stop