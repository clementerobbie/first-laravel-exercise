<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index(){
        $posts = Post::all();
        return view('post.posts',compact('posts'));
    }

    public function create(){
    	return view('/post/create');
    }

    public function publish(){

    	Post::create([
    		'title' => request('title'),
    		'body' => request('body'),
    		'user_id' => auth()->id()
    	]);

        $posts = Post::all();

        return view('post.posts',compact('posts'));
    }

    public function show(Post $post){
        
     return view('/post/show',compact('post'));
 }
}
