<?php

namespace Pushrealcomment\Http\Controllers;
 

use Pushrealcomment\Comment;
use Pushrealcomment\Events\NewComment;
use Pushrealcomment\Video;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Video $video)
    {
    	return response()->json(
    		$video->comments()->with('user')->latest()->get()
		);
    }
    public function store(Video $video)
    {
    	$comment = $video->comments()->create([
    		'body' => request('body'),
    		'user_id' => auth()->user()->id,
    		'video_id' => $video->id
		]);
        $comment = Comment::where('id', $comment->id)->with('user')->first();
		broadcast(new NewComment($comment))->toOthers();
		return $comment;
    }
}
