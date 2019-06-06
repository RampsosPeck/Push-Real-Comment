<?php

namespace Pushrealcomment\Http\Controllers;

use Illuminate\Http\Request;
use Pushrealcomment\Video;

class VideoController extends Controller
{
    public function show(Video $video)
    {
    	return view('video.show', [
    		'video' => $video,
		]);
    }
}
