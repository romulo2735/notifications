<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['user_id', 'post_id', 'title', 'content'];

    public function post(){
        return $this->belogsTo(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
