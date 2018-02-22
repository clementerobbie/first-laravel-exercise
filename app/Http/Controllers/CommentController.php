<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($post){
    	Comment::create([
    		'user_id' => auth()->id(),
    		'post_id' => $post,
    		'body' => request('comment')
    	]);

    	return back();
    }
}
