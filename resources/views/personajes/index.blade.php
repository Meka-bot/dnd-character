@extends('layouts.app')

@section('content')

{{ csrf_field() }}

@foreach ($personajes->usuario_id as $user)
	<div class="col" style="text-align: center;">
	@include('utilities._personaje_card')
	</div>
@endforeach

@endsection