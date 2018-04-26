<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    public function addComments($body)
    {
    	$this->comments()->create(['body'=>$body]);
    }
}
