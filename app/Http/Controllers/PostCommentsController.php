<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Comment;

class PostCommentsController extends Controller
{
    //

 
    public function store(Post $post){

            request()->validate([
                'body' => 'required'
            ]);

            $post->comments()->create([
                'user_id' => request()->user()->id,
                'body' => request('body')
           ]);
       
           return back();
    }

    public function destroy(Comment $comment){
            $comment()->delete();
            return back()->with('success', 'Comment Removed!');
    }
}
