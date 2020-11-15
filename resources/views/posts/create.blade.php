@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
    <div class="container-fluid">
        <div id="wrapper">
            <div id="page" class="container-fluid">
                <label class="label" for="title">New Post</label>
            </div>
            <form method="post" action="/posts">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input @error('title')is-danger @enderror " type="text" name="title" id="title"
                               value="{{old('title')}}">
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                            @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="title">Body</label>
                    <div class="control">
                        <textarea class="textarea @error('title')is-danger @enderror" name="body" id="body">
                            {{old('body')}}
                        </textarea>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
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