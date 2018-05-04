<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    protected $fillable = ['title', 'body','user_id'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function addComments($body)
    {
    	$this->comments()->create(['body'=>$body]);
    }

    public function scopeFilter($query, $filter)
    {
        if (isset($filter['month'])) {
            if ($month = $filter['month']) {
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }
            if ($year = $filter['year']) {
                $query->whereYear('created_at', $year);
            }
        }
    }
}
