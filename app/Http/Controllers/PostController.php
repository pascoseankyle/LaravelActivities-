<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   function show(){
       $data=Post::all();
       return view('list', ['posts'=>$data]);
   }
   function addData(Request $req){
    $post=new Post;
    $post->Title=$req->Title;
    $post->Description=$req->Description;
    $post->save();
    return redirect('list');
   }
   function deleteData($id){
    $data=Post::find($id);
    $data->delete();
    return redirect('list');
   }
   function editData($id){
    $data=Post::find($id);
    return view('edit',['data'=>$data]);
   }
   function updateData(Request $req){
    $data=Post::find($req->id);
    $data->Title=$req->Title;
    $data->Description=$req->Description;
    $data->save();
    return redirect('list');
   }
}
