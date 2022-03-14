<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
       public function destroy(Comment $comment){
            $comment->delete();
            return back()->with('success', 'comment Removed!');
    }
}
