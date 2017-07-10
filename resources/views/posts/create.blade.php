@extends('main')

@section('title', 'Create New Post')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}
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

@section('')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
    			{{ Form::label('title', 'Title:') }}
    			{{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}

    			{{ Form::label('slug', 'Slug:')}}
    			{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'))}}

    			{{ Form::label('category_id', 'Category:') }}
    			<select name="category_id" class="form-control">
    				@foreach ($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
    				@endforeach
    			</select>

                {{ Form::label('tags', 'Tags:') }}
                <select name="tags[]" class="form-control select2-multi" multiple="multiple">
                    @foreach($tags as $tag)    
                    
                        <option value="{{ $tag->id }}"> {{$tag->name}} </option>

                    @endforeach
                </select>    


    			{{ Form::label('body', "Post Body:")}}
    			{{ Form::textarea('body', null, array('class' => 'form-control')) }}

    			{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;'))}}
			{!! Form::close() !!}

		</div>
	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script>
        $('.select2-multi').select2();
    </script>


@endsection