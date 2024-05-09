<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    function publish(Request $request)
    {

        $post=Post::create([
            "title"=>"test title" ,
            "body"=>"test bod",
          ]);
        //    return $request->user();
  return response()->json($post, 201);
// return "publish";
    }
    function getPost(){
        $post=Post::all();
        return response()->json($post, 200);
    }
   function getPostById($id)
    {
        $post=Post::find($id);
        return response()->json($post, 200); 
    }
    function deletePostById($id)
    {
        $post=Post::find($id);
        $post->delete();
        return response()->json(["data"=>"deleted success"], 200); 
    }
    function updatePostById(Request $request,$id)
    {
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');

        return response()->json($post, 201); 
    }
}
