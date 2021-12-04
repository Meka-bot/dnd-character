@extends('layouts.app')

@section('content')

{{ csrf_field() }}

<div style="text-align: center; row;">
<h1>Personajes de {{ Auth::user()->name }}:</h1>
</div>
<hr>

@foreach($personajes as $personaje)
<div class="card container" style="border-color:rgb(61, 86, 128); width:25%;">
	<br>
	<div class="card-title" style="text-align:center;">
	<h1 style="color:rgb(61, 86, 128);">Personaje</h1>
	</div>
	<hr style="border-color:rgb(61, 86, 128);">
      <div>
		<h3 style="color:rgb(236,33,39,255);">Clase:</h3>
		<hr style="width:20%; text-align:left; margin-left:0; border-color:rgb(61, 86, 128);">
		<h5>{{ $personaje->clase_id }}</h5>
      </div>
	  <hr style="border-color:rgb(61, 86, 128);">
	  <div>
		<h3 style="color:rgb(236,33,39,255);">Raza</h3>
		<hr style="width:20%; text-align:left; margin-left:0; border-color:rgb(61, 86, 128);">
		<h5>{{ $personaje->raza_id }}</h5>
      </div>
	  <hr style="border-color:rgb(61, 86, 128);">
	  <div>
		<h3 style="color:rgb(236,33,39,255);">Equipamento</h3>
		<hr style="width:45%; text-align:left; margin-left:0; border-color:rgb(61, 86, 128);">
		<h5>{{ $personaje->equipamiento_id }}</h5>
      </div>
	  <br>
</div>
<hr>
@endforeach

<div style="text-align:center;">
<a class="btn btn-link btn-outline-primary" href="{{ route('home') }}">Crear otro personaje</a>
</div>



@endsection