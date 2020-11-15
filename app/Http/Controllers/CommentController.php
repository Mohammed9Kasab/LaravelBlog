<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($post_id){
        // persist  the new post
        request()->validate([
            'body'=>'required',
        ]);

        Comment::create([
            'body'=>request('body'),
            'user_id'=>auth()->id(),
            'post_id'=>$post_id
        ]);
        return redirect('/posts/show/'.$post_id);
    }
}
