@extends('main')

@section('title', '¿BORRAR COMENTARIO?')

@section('content')

	<div class="col-md-8 col-md-offset-2">
		<h1>¿Deseas Borrar el Comentario?</h1>
		<p>
			<strong>Nombre</strong>{{$comment->name}} <br>
			<strong>Email</strong>{{$comment->email}} <br>
			<strong>Comentario:</strong>{{$comment->comment}}
		</p>

		{{Form::open(array('route' => array('comments.destroy', $comment->id), 'method' => 'DELETE'))}}

			{{Form::submit('BORRAR COMENTARIO', array('class' => 'btn btn-large btn-danger btn-block'))}}
		{{Form::close()}}
	</div>

@endsection