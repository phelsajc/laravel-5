@extends('master')

@section('content')

	<h1>Justin Bebier Gay</h1>
 
	<!--foreach ($songs as $index => $song)-->

		@foreach ($songs as $song)

		<li><a href="/songs/{{ $song->slug }}">{{ $song->title }}</a></li>
	 
	@endforeach

@stop