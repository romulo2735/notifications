<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $post;
    /**
     * PostController constructor.
     * @param Post $post
     */
    public function __construct(Post $post){
        $this->post = $post;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $posts = $this->post->with('comments')->paginate();

        return view('posts.index', compact('posts'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

        /** @var  $post */
        // Retornando o user que fez o comentário e o user dono do Post.
        $post = $this->post->with('comments.user', 'user')->findOrFail($id);

        return view('posts.show', compact('post'));
    }
}
