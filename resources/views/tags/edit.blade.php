@extends('main')

@section('title', ' Edit Tag')

@section('content')

	{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
		
		{{Form::label('name', "Title:")}}
		{{Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Title'))}}
		<br>
		{{Form::submit('Save Changes', array('class'=>'btn btn-primary'))}}

	{{Form::close()}}

@endsection