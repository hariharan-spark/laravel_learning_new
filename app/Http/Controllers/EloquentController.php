<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;


class EloquentController extends Controller
{

    public function viewForm()
    {
        $post=new post;
        $data= $post->with('comments')->get();

        return view('relationship',compact('data'));
    }
    public function createRecord(Request $request)
    {    
       $post=new post;
       $post->name=$request->name;
       $post->save();  
       return redirect('get-form');
    }   

    public function getData()
    {
        $post=new post;
        $data= $post->get();
        return view('comments',compact('data'));
    }

public function commentsRecord(Request $request)
{
    $comment=new Comment;
    $comment->comment=$request->comment;
    $comment->post_id=$request->post_id;
    $comment->save();  
    return back();
}


    

}
