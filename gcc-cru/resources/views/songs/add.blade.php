	@extends('master')

@section('add-new-song')


	
	<h2></h2>
		<h2></h2>

			{!!Form::model(['url'=>'songs/','method'=>'POST']) !!}
		<div class="form-group ">
			{!! Form::label('', 'Title of the Song'); !!}
			<!-- {!! Form::label('label','Title',['class'=>'']); !!} -->
			{!! Form::text('title',null,['class'=>'form-control','required'])!!}

			</div>

				<div class="form-group">
				{!! Form::label('', 'Slug of the Song'); !!}
			{!! Form::text('slug',null,['class'=>'form-control','required'])!!}

			</div>
	
	<div class="form-group">
	{!! Form::label('', 'Lyrics'); !!} 
			{!! Form::textarea('lyrics',null,['class'=>'form-control','required'])!!}

			</div>



<div class="form-group">

			{!! Form::submit('Add Song',['class'=>'btn btn-primary'])!!}
{!! link_to_route('songs_path','Go Back Home',array(),array('class' => 'btn btn-info')) !!}
			</div>


		{!!Form::close()!!}


@stop