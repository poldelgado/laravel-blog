@extends('main')

@section('title', 'Editar comentario de ' . $comment->name)

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<h1>Editar Comentario</h1>

		{{ Form::model($comment, array('route' => ['comments.update', $comment->id], 'method' => 'PUT')) }}
			
			{{Form::label('name','Nombre:')}}
			{{Form::text('name', null, array('class' => 'form-control', 'disabled' => 'disabled'))}}
			
			{{Form::label('email', 'Email:')}}
			{{Form::text('email', null, array('class' => 'form-control', 'disabled' => 'disabled'))}}

			{{Form::label('comment', 'Comentario:')}}
			{{Form::textarea('comment', null, array('class' => 'form-control'))}}

			{{Form::submit('Actualizar Comentario', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px'))}}



		{{ Form::close() }}
	</div>

@endsection