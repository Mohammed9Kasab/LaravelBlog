@extends('layout')
@section('content')
    <br>
    <section id="posts">
        @foreach($posts as $post)
            <a href="/posts/show/{{$post->id}}" title="this post for {{$post->user->name}}" class="post"
               style="background-image: url(https://placeimg.com/640/480/animals);"><h2>{{$post->title}}</h2>
                <p class="lead">{{$post->body}}</p></a>
            <div>
                <h1></h1>
            </div>
        @endforeach
    </section>


@endsection

