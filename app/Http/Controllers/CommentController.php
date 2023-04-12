<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
    	$request->validate([
            'comment'=>'required',
        ]);
   
        $input = $request->all();
        $input['user_name'] = auth()->user()->name;
    
        Comment::create($input);
   
        return back();
    }
}
