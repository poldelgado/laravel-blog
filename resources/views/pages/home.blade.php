@extends('main')
    
    @section('title', 'Home Page')

    @section('home_link', 'active')

    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to My blog</h1>
                    <p class="lead">Thank you so much for visiting. This is my test website. Read my latest post!</p>
                    <p><a href="#" class="btn btn-primary">Popular Post</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ strip_tags($post->body) }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>
                @endforeach
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
    @endsection