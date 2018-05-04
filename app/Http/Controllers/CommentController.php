<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Comment,Post};

class CommentController extends Controller
{
    public function store(Post $post)
    {
    	// Comment::create([
    	// 	'body' => request('body'),
    	// 	'post_id' => $post->id
    	// ]);
    	//$post=Post::find($id);

    	// $post->addComments(request('body'));
    	$this->validate(
    		request(), 
    		['body'=>'required|min:2'],
    		[
    			'body.required' => 'Izoh to\'ldirilishi kerak',
    			'body.min' => 'Izohga kamida 2 xarf to\'ldirilishi kerak'
    		]
    	);
    	$post->comments()->create(['body'=>request('body'), 'user_id'=>auth()->id()]);
    	return back();
    }
}
