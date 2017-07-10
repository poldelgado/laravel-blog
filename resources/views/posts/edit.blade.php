@extends('main')

@section('title', 'Edit')

@section('stylesheets')

	{!! Html::style('css/select2.min.css') !!}
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector:'textarea',
            plugins: 'link code',
            menubar: false
        });
    </script>

@endsection


@section('content')
	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
			{{ Form::label('slug', 'Slug:')}}
    		{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'))}}

			{{ Form::label('category_id','Category:') }}
			{{ Form::select('category_id', $categories, null, array('class' => 'form-control'))}}

			{{ Form::label('tags', 'Tags:', array('class' => 'form-spacing-top')) }}
			{{ Form::select('tags[]', $tags, null, array('class' => 'form-control select2-multi', 'multiple' => 'multiple'))}}

			{{ Form::label('body', 'Body:', array('class' => 'form-spacing-top')) }}
			{{ Form::textarea('body', null ,['class' => 'form-control'])}}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('d-m-Y',strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('d-m-Y',strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}	
						</div>
						<div class="col-sm-6">
							{{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}							
						</div>
					</div>	

			</div>
		</div>
		{!! Form::close() !!}
	</div>
@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script>
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
    </script>


@endsection