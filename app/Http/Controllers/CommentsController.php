<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $id){
        $comment = new Comments();
        $comment->geocache_id = $id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect('geocache/'.$id);

    }
}
