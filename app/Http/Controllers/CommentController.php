<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::paginate(5);
        return view('admin.comments.index', ['comments'=>$comments]);
       }  
}
