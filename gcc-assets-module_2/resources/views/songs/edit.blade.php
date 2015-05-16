	@extends('master')

@section('songs')


	
	<h2>{{ $song->slug }}</h2>
		<h2>{{ $song->id }}</h2>

		{!!Form::model($song,['url'=>'songs/'.$song->slug,'method'=>'PATCH']) !!}
		<div class="form-group ">
			{!! Form::text('title',null,['class'=>'form-control'])!!}

			</div>

				<div class="form-group">
			{!! Form::text('slug',null,['class'=>'form-control'])!!}

			</div>
	
	<div class="form-group">
			{!! Form::textarea('lyrics',null,['class'=>'form-control'])!!}

			</div>



<div class="form-group">
			{!! Form::submit('Update Song',['class'=>'btn btn-primary'])!!}

			</div>


		{!!Form::close()!!}
@stop