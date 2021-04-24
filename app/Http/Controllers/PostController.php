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

    $req->validate([
        'Title' => 'required|max:100',
        'Description' => 'required'
    ]);
    // ---------  Old Code ---------- //
    // $post->Title=$req->Title;
    // $post->Description=$req->Description;
    // ---------  Old Code ---------- //
    if($req->hasFile('img')){

        $filenameWithExt = $req->file('img')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
        $extension = $req->file('img')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $path = $req->file('img')->storeAs('public/img', $filenameToStore);
    } else{
        $filenameToStore = '';
    }
    $post = new Post();
    $post->fill($req->all());
    $post->img = $filenameToStore;
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
