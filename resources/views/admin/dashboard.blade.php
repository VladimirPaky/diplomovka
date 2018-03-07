@extends('layouts.admin')

@section('content')

  <h2>Dashboard</h2>
  <hr>
          <p>Pocet pouzivatelov: <span>{{ $users->count() }}</span></p>
          <p>Pocet neaktivoanych: <span>{{ $users->where('is_active', 0)->count() }}</span></p>
          <p>Pocet kurzov: <span>{{ $courses->count() }}</span></p>
          <p>Pocet clankov: <span>{{ $posts->count() }}</span></p>

@stop