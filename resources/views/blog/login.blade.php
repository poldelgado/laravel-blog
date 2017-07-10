@extends('main')

@section('title','Login')

@section('content')
	
	{{-- form helpers allways include de csrf protection --}}
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			{{!! Form::open() !!}}

				{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'email')) }}
				{{ Form::password('secret', null, array('class' => 'form-control', 'placeholder' => 'password'))}}
				{{ Form::checkbox('remember')}}{{Form::label('remember',"Remember Me") }}
				{{ Form::submit('Login') }}

		</div>
	</div>



@endsection