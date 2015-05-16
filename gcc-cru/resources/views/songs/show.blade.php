	@extends('master')

@section('show-songs')

{!! link_to_route('songs_path','Go Back Home',array(),array('class' => 'btn btn-primary')) !!} |
	{!! link_to_route('edit_song_path','Edit this Song',[$song->slug],array('class' => 'btn btn-success')) !!} |
	{!! link_to_route('delete_songs_path','Delete this Song',[$song->slug],array('class' => 'btn btn-danger')) !!}

	<h2>{{ $song->title }}</h2>
	
	<h2>{{ $song->slug }}</h2>


@if ($song->lyrics)

	
	<article class="lyrics">
		
{!! nl2br($song->lyrics) !!}


	</article>
	
	@endif
@stop
<!--
no need of array(), before array('class' => 'btn btn-success')

->