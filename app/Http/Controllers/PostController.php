<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        // $posts = Post::latest()->simplePaginate(3);
        // $posts = Post::latest();
        $posts = Post::latest()->filter(request(['month','year']))->simplePaginate(3);


        // if ($month = request('month')) $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // if ($year = request('year')) $posts->whereYear('created_at', $year);

        // $posts = $posts->simplePaginate(3);

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published ')
        ->groupBy('year','month')
        ->orderByRaw('max(created_at)')
        ->get()
        ->toArray();
    	return view('post.index',compact('posts','archives'));
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
        // dd(auth()->id());
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            ],
            [
            'title.required' => "Nomini to'ldirish shart",
            'body.required'  => "Matnini to'ldirish shart",
        ]);

    	// Post::create([
    	//    'title' => request('title'),
     //       'body' => request('body'),
     //       'user_id' => auth()->id()	
    	// ]);
        auth()->user()->publish(
            new Post(request(['title','body']))
        );
    	return redirect('/');
    }  

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
}
