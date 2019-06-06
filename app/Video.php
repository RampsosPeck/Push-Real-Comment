<?php

namespace Pushrealcomment;

use Illuminate\Database\Eloquent\Model;
use Pushrealcomment\Comment;

class Video extends Model
{
    protected $fillable = ['embed_link'];
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
