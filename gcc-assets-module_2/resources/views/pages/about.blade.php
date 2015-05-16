@extends('master')


@section('content')

	About Me

@stop


@section('pass')

	

	@foreach ($lessons as $lesson)
		<h2>{{ $lesson }}</h2>

	@endforeach

@stop