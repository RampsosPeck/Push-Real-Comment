<?php

namespace Pushrealcomment;

use Illuminate\Database\Eloquent\Model;

use Pushrealcomment\User;
use Pushrealcomment\Video;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id', 'video_id'];
    public function video()
    {
    	return $this->belongsTo(Video::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
