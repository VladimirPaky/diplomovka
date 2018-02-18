@extends('layouts.admin')

@section('content')
	

  <h2>Zoznam MOJICH používateľov</h2>
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
		        <td><img height=30 class="img-circle" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/30/333/ccc?text=Nema+fotku' }}"></td>
		        <td>{{ $user->name }}</td>
		        <td>{{ $user->email }}</td>
		        <td>{{ $user->role->name }}</td>
		        <td>{{ $user->is_active = 1 ? 'Aktivovaný' : 'Neaktivovaný' }}</td>
		        <td>{{ $user->created_at}} ({{ $user->created_at->diffForHumans() }})</td>
		        <td>{{ $user->updated_at}} ({{ $user->updated_at->diffForHumans() }})</td>
		        <td>
		        	<a href="{{route('admin.users.edit', $user->id)}}"><i class="fa fa-edit"></i></a>
		        	 {{ Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id]]) }}
		                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
		            {{ Form::close() }}
		        	
		        </td>
		      </tr>
		@endforeach
	@endif

</tbody>
</table>



@stop