<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request, $id){
        $comment = new Comments();
        $comment->geocache_id = $id;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect('geocache/'.$id);

    }
}
