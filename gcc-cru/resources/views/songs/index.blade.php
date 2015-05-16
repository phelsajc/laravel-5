@extends('master')

@section('lists')


 
	<!--foreach ($songs as $index => $song)-->

		@foreach ($songs as $song)

		<li>
				{!! link_to_route('song_path',$song->title,[$song->slug]) !!}
	</li>
	 
	@endforeach
{!! link_to_route('form_songs_path','Add New Song',array(),array('class' => 'btn btn-primary')) !!}



@stop