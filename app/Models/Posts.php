<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment','post_id');
    }
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
}
