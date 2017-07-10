@extends('main')

@section('title','Login')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 center-block" style="max-width:500px; padding:70px 30px; border: 1px solid #51627A; border-bottom: 3px solid blue; border-radius: 5px">
			{!! Form::open() !!}
			
				{{ Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'email' ))}}
				<br>
				{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password'))}}
				<br>
				{{ Form::checkbox('remember')}} {{ Form::label('remember', "Remember Me") }}
				<br>

				{{ Form::submit('Login', array('class' => 'btn btn-primary btn-block')) }}
				<br>
				<p><a href="{{ url('password/reset') }}">Forgot My Password</a></p>

			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection