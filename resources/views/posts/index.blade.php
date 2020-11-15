@extends('layout')
@section('content')
    <br>
    @auth
        <div class="fluid_container">
            <div class="container">
                <a href="posts/create">
                    <button>Add new post</button>
                </a>
                @else
                    <a href="login">
                        <button>Add new post</button>
                    </a>
            </div>
        </div>
    @endauth
    <div id="posts">

        @foreach($posts as $post)
            @auth
                <a href="posts/show/{{$post->id}}" title="this post for {{$post->user->name}}" class="post"
                   style="background-image: url(https://placeimg.com/640/480/animals);"><h2>{{$post->title}}</h2>
                    {{--        <p>{{$post->body}}</p>--}}
                    <p class="lead">{{$post->body}}</p></a>
            @else
                <a href="login" title="this post for {{$post->user->name}}" class="post"
                   style="background-image: url(https://placeimg.com/640/480/animals);"><h2>{{$post->title}}</h2>
                    {{--        <p>{{$post->body}}</p>--}}
                    <p class="lead">{{$post->body}}</p></a>

            @endauth
                <div>
                    <h1></h1>
                </div>
        @endforeach

    </div>

@endsection

