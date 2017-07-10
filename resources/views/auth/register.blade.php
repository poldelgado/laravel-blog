@extends('main')

@section('title','Register User')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3 center-block" style="max-width:500px; padding:70px 30px; border: 1px solid #51627A; border-bottom: 3px solid blue; border-radius: 5px">
			{!! Form::open() !!}
				{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'name'))}}
				<br>
				
				{{ Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'email' ))}}
				<br>
				{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password'))}}
				<br>

				{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'confirm password'))}}
				<br>

				{{ Form::submit('Register', array('class' => 'btn btn-primary btn-block')) }}

			{!! Form::close() !!}
		</div>
	</div>

@endsection