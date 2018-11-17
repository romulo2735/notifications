<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $comment = $request->user()->comments()->create($request->all());

        return redirect()->route('posts.show', $comment->post->id)->withSuccess('comentário com sucesso');
    }
}
