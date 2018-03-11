@extends('layouts.admin')

@section('content')

<h1>Zoznam článkov</h1>
<hr>

<table id="mojaTabulka" class="table">
<thead>
	<tr>
		<th>ID</th>
		<th>Obrázok</th>
		<th>Používateľ</th>
		<th>Kategória</th>
		<th>Nadpis</th>
		<th>Obsah</th>
		<th>Vytovrený</th>
		<th>Aktualizovaný</th>
		<th>Operácie </th>
	</tr>
</thead>

<tbody>
	@if($posts)
	@foreach($posts as $post)
	<tr>
		<td>{{ $post->id }}</td>
		<td><img height="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/200?text=Post+nema+fotku' }}"></td>
		<td>{{ $post->user->name }}</td>

		<td>{{ $post->category ? $post->category->name : 'Bez ketegórie' }}</td>
		
		{{-- {{ var_dump($post->postCategories)}} --}}
		<td>{{ str_limit($post->title, 20) }}</td>
		<td>{{ str_limit($post->body, 10) }}</td>
		<td>{{ $post->created_at . " (" . $post->created_at->diffForHumans() . ")" }}</td>
		<td>{{ $post->created_at . " (" . $post->updated_at->diffForHumans() . ")"}}</td>
		<td class="d-i-flex">

			<a class="btn btn-sm btn-primary" href="{{route('posts.edit', $post->id)}}"><i class="fa fa-edit"></i></a>

			{{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) }}
			{{-- {{ Form::submit('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger']) }} --}}
			{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete-link'] )  }}
			{{ Form::close() }}

		</td>
	</tr>
	@endforeach	
	@endif
</tbody>
</table>
@stop