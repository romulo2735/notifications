<?php

namespace App\Http\Controllers;

use App\Notifications\PostCommentedNotify;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{

    public function store(StoreCommentRequest $request)
    {
        $comment = $request->user()->comments()->create($request->all());

        // recuperando o autor do post.
        $autor = $comment->post->user;
        $autor->notify(new PostCommentedNotify($comment));

        return redirect()->route('posts.show', $comment->post->id)->withSuccess('comentário com sucesso');
    }
}
