<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function show($postId){
        $post = Post::find($postId);

        return view('post', compact('post'));
    }
}
