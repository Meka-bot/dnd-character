@extends('layouts.app')

@section('content')

@foreach ($personajes->ususario_id as $user)
	<div class="col" style="text-align: center;">
	@include('utilities._personaje_card')
    <hr>
    <input type="checkbox" id="" name="clase_id" value="{{ $clase->id }}">
		</div>
  @endforeach

@endsection