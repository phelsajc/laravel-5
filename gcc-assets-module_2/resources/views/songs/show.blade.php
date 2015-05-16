	@extends('master')

@section('songs')

	<h1>Justin Bebier Gay</h1>
 
	<h2>{{ $song->title }}</h2>
	
	<h2>{{ $song->slug }}</h2>


@if ($song->lyrics)

	
	<article class="lyrics">
		
{!!nl2br($song->lyrics) !!}

	</article>

	@endif
@stop