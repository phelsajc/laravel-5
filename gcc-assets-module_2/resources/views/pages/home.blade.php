@extends('master')


@section('content')

	 <h2>{!! $name !!}</h2> 

	@foreach ($lessons as $lesson)
		<h2>{{ $lesson }}</h2>

	@endforeach

@stop