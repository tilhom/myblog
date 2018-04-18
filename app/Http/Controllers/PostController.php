<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	return view('post.index');
    }
    public function create()
    {
    	return view('post.create');
    }
    public function store()
    {
    	// $post = new \App\Post;
    	// $post->title = request('title');
    	// $post->body = request('body');
    	// $post->save();
    	// \App\Post::create([
    	// 	'title' => request('title'),
    	// 	'body' => request('body')
    	// ]);
    	// \App\Post::create(
    	// 	request()->all()
    	// );
         
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            ],
            [
            'title.required' => "Nomini to'ldirish shart",
            'body.required'  => "Matnini to'ldirish shart",
        ]);
    	\App\Post::create(
    		request(['title','body'])
    	);

    	return redirect('/');
    }  
}
