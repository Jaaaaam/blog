<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use App\Http\Requests;

class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $comment = new Comment;

        $comment->body = $request->body;
        $blog->comment()->save($comment);

        return back();
    }
}
