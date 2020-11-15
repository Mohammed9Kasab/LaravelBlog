@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div id="wrapper">
            <div id="page" class="container-fluid">
                <label class="label" for="title">Update Post</label>
            </div>
            <form method="post" action="/posts/{{$post->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{$post->title}}">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="title">Body</label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body" >{{$post->body}}</textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
