<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
       $posts = Post::all();
       return view('posts.index',['posts'=>$posts]); 
   }

   public function create()
   {
       return view('posts.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'Title' => 'required',
           'Description' => 'required',
       ]);

       Post::create($request->all());

       return redirect()->route('posts.index')
       ->with('success','Posts created successfully.');
   }

   public function show(Post $post)
   {    
       $post = Post::where('id', $post->id);
       return view('posts.show', ['post'=>$post]);
   }

   public function edit(Post $post)
   {    
       return view ('posts.edit',compact('post'));
   }

   public function update(Request $request,Post $post)
   {
       $request->validate([

       ]);

       $post->update($request->all());

       return redirect()->route('posts.index')
       ->with('success','Post updated successfully');
   }

   public function destroy(Post $post)
   {
       $post->delete();

       return redirect()->route('posts.index')
       ->with('success','Post deleted successfully');
   }
}
