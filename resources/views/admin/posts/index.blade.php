@extends('layouts.admin')

@section('content')

	<h1>Zoznam článkov</h1>
	<hr>

	<table class="table">
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
			</tr>
		</thead>

		<tbody>
			@if($posts)
				@foreach($posts as $post)
					<tr>
						<td>{{ $post->id }}</td>
						<td><img height="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/200?text=Post+nema+forku' }}"></td>
						<td>{{ $post->user->name }}</td>
						<td>{{ $post->category ? $post->category->name : 'Bez ketegórie' }}</td>
						{{-- {{ var_dump($post->postCategories)}} --}}
						<td>{{ $post->title }}</td>
						<td>{{ $post->body }}</td>
						<td>{{ $post->created_at }}</td>
						<td>{{ $post->updated_at }}</td>
					</tr>
				@endforeach	
			@endif
		</tbody>
	</table>
	@stop