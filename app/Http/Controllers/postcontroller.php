<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Dotenv\Store\File\Reader;

class postcontroller extends Controller
{
    public function addPost(){
        return view('layouts.addpost');
    }
    public function createPost(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('post_created',"Post has been successfully created");
    }
Public function getPost(){
    $posts=Post::orderBy('id','DESC')->get();
    return view('layouts.post',compact('posts'));
}
public function getPostById($id)
{ 
    $post=Post::where('id',$id)->first();
    return view('layouts.singlepost',compact('post'));
}


 Public function deletepost($id){
    Post::where('id',$id)->delete();
   return back()->with('postdelete','Post deleted'); 
}
public function editpost($id){
    $post=Post::find($id);
    return view('layouts.editpost',compact('post'));

}
public function updatepost(Request $request)
{
$post=Post::find($request->id);
    $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('postupdate',"Post has been successfully updated");
    }
}

