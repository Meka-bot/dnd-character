@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('personaje.store') }}">
{{ csrf_field() }}


<div class="form-group">
<input type="hidden" name="usuario_id" value="{{ Auth::user()->id }}">
</div>

    <section>
      <div style="background-image: url('https://assets.dicebreaker.com/dungeons-and-dragons-races-guide.jpg/BROK/resize/1200x1200>/format/jpg/quality/70/dungeons-and-dragons-races-guide.jpg'); width:100%;  height: 35vh; padding:0.7%; display: table; margin: 0; background-repeat:no-repeat; background-size:cover; background-attachment: fixed;">
      <div style="text-align: center; margin: 10%; text-shadow: white 0px 0px 10px, white 0px 0px 10px;"><h1>Raza</h1></div>
    </div>
    </sections>
	
    <br>

<div class='container form-group'>
	<div class="row">
  @foreach ($clases as $clase)
		<div class="col" style="text-align: center;">
		@include('utilities._clase_card')
    <hr>
    <input type="checkbox" id=""  name="clase_id" value="{{ $clase->nombre }}">
		</div>
  @endforeach
	</div>
</div>

    <br>

    <section>
      <div style="background-image: url('https://static0.gamerantimages.com/wordpress/wp-content/uploads/2019/10/dnd-story-cover.jpg'); width:100%;  height: 35vh; padding:0.7%; display: table; margin: 0; background-repeat:no-repeat; background-size:cover; background-attachment: fixed;">
      <div style="text-align: center; margin: 10%; text-shadow: white 0px 0px 10px, white 0px 0px 10px;"><h1>Clase</h1></div>
    </div>
    </sections>

    <br>

  <div class='container form-group'>
	<div class="row">
  @foreach ($razas as $raza)
		<div class="col" style="text-align: center;">
		@include('utilities._raza_card')
    <hr>
    <input type="checkbox" id="" name="raza_id" value="{{ $raza->nombre }}">
		</div>
  @endforeach
	</div>
  </div>

  <br>

    <section>
      <div style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2d40a2a6-1c8d-47bc-947a-e23cef83c2ed/d7robpu-2f725ea3-b702-4413-aca4-2cd2088e090e.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJkNDBhMmE2LTFjOGQtNDdiYy05NDdhLWUyM2NlZjgzYzJlZFwvZDdyb2JwdS0yZjcyNWVhMy1iNzAyLTQ0MTMtYWNhNC0yY2QyMDg4ZTA5MGUuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.ynpcQlWVmi630kHYScGhXKfXHheQdhd3jiOoWOcIyDc'); width:100%;  height: 35vh; padding:0.7%; display: table; margin: 0; background-repeat:no-repeat; background-size:cover; background-attachment: fixed;">
      <div style="text-align: center; margin: 10%; text-shadow: white 0px 0px 10px, white 0px 0px 10px;"><h1>Equipamento</h1></div>
    </div>
    </sections>

    <br>

  <div class='container form-group'>
	<div class="row">
  @foreach ($equipamientos as $equipamiento)
		<div class="col" style="text-align: center;">
		@include('utilities._equipamiento_card')
    <hr>
    <input type="checkbox" id="" name="equipamiento_id" value="{{ $equipamiento->nombre }}">
		</div>
  @endforeach
	</div>
  </div>

  <br>
  <hr>

  <div style="text-align: center;">
  <button type="submit" class="btn btn-outline-primary">Crear personaje</button>
  </div>

  </form>
@endsection
