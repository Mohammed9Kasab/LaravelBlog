<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $post=Posts::latest()->get();
        return view('posts.index',['posts'=>$post]);
    }
    public function show(Posts $post){
        return view('posts.show',['post'=>$post]);
    }

    public function auth_post(){
        $post=Posts::latest()->where('user_id', auth()->id())->get();
        return view('posts.show_auth',['posts'=>$post]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        // persist  the new post
        request()->validate([
            'title'=>'required',
            'body'=>'required',

        ]);

        Posts::create([
            'title'=>request('title'),
        'body'=>request('body'),
            'user_id'=>auth()->id()
        ]);
        return redirect('/posts');
    }
    public function edit(Posts $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Posts $post){
        request()->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $post->title=request('title');
        $post->body=request('body');
        $post->user_id=auth()->id();
        $post->save();
        return redirect('/posts/'.$post->id);
    }
    public function delete(Posts $post){
        $post->delete();
        return redirect('/posts/'.auth()->id());
    }

}
