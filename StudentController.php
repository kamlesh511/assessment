<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;


class StudentController extends Controller
{
    public function index()
    {
        return view('add-post');
    }
    public function createPost(Request $request)
    {
        $post= new posts();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('post_create','post has been created successfully !');
    }
}
