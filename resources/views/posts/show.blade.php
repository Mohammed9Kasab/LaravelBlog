@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@section('content')

        <div class="container-fluid">
            <div id="wrapper">
                <br>
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input disabled class="input " type="text" name="title" id="title"
                               value="{{$post->title}}">

                    </div>
                </div>
                <div class="field">
                    <label class="label" for="title">Body</label>
                    <div class="control">
                        <textarea disabled class="textarea " name="body" id="body">
                            {{$post->body}}
                        </textarea>
                    </div>
                </div>
            </div>
            <br>
            <form method="post" action="/comment/add/{{$post->id}}">
                @csrf
                <label class="label" for="title">Comment</label>
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" name="body" id="body">
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="rounded" type="submit">Add Comment</button>
                    </div>
                </div>
            </form>
            @if($post->user_id ==auth()->id() )
                <a href="{{url('posts/edit/'.$post->id)}}">
                        <button>Edit post</button>
                    </a>
                <a href="{{url('posts/delete/'.$post->id)}}">
                        <button>Delete post</button>
                    </a>
            @endif
            <div>
                @foreach($post->comments as $comment)
                    <div class="flex item center" >
                        <br>
                        <img src="https://i.pravatar.cc/30" alt="" class="rounded-circle">
                        {{$comment->user->name}}
                    </div>
                <div class="flex item center">
                    <div class="field">
                        <label class="label" for="title">Title</label>
                        <div class="control">
                            <input disabled class="input" type="text" name="title" id="title" value="{{$comment->body}}">
                        </div>
                    </div>

                    @if($comment->user->id == auth()->id() )
                        <a href="{{url('comments/edit/'.$comment->id)}}">
                            <button class="rounded-circle">Edit</button>
                        </a>
                        <a href="{{url('comments/delete/'.$comment->id)}}">
                            <button class="rounded-circle">Delete</button>
                        </a>
                        <div hidden>

                        </div>
                    @endif

                </div>

                    <div>
                        <h1></h1>
                    </div>

                @endforeach

            </div>

        </div>

@endsection

