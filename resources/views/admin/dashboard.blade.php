@extends('layouts.admin')

@section('content')

  <h2>Dashboard</h2>
  <hr>
  	<div class="row">

  		<div style="height: 140px" class="around">
	  	<div style=" border-radius: 8px;" class="col-xl-4 col-lg-4 col-md-3 col-xs-12 bg-info">
	  		<h5>Pocet pouzivatelov:</h5> 
	  			<br>
	  			<p style="font-size: 42px;">
	  				<span>{{ $users->count() }}</span>
	  			</p>
		</div>
		</div>

 		<div style="height: 140px" class="around">
	  	<div style=" border-radius: 8px;" class="col-xl-4 col-lg-4 col-md-3 col-xs-12 bg-info">
	  		<h5>Pocet pouzivatelov:</h5> 
	  			<br>
	  			<p style="font-size: 42px;">
	  				<span>{{ $users->count() }}</span>
	  			</p>
		</div>
		</div>

		 		<div style="height: 140px" class="around">
	  	<div style=" border-radius: 8px;" class="col-xl-4 col-lg-4 col-md-3 col-xs-12 bg-info">
	  		<h5>Pocet pouzivatelov:</h5> 
	  			<br>
	  			<p style="font-size: 42px;">
	  				<span>{{ $users->count() }}</span>
	  			</p>
		</div>
		</div>


		


</div>







          
          <p>Pocet neaktivoanych: <span>{{ $users->where('is_active', 0)->count() }}</span></p>
          <p>Pocet kurzov: <span>{{ $courses->count() }}</span></p>
          <p>Pocet clankov: <span>{{ $posts->count() }}</span></p>

@stop