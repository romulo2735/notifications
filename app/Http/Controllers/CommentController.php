<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{

    public function store(StoreCommentRequest $request)
    {
        $comment = $request->user()->comments()->create($request->all());

        return redirect()->route('posts.show', $comment->post->id)->withSuccess('comentário com sucesso');
    }
}
