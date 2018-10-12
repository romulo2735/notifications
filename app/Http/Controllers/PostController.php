<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function index(){
        $posts = Post::paginate();

        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = $this->post->findOrFail($id);

        return view('posts.show', compact('post'));
    }
}
