<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts=[
        //     ['id'=>1, 'title'=>'Laravel', 'description'=>'This is description','posted_by'=>'Nadine','created_at'=>'2021-03-13'],
        //     ['id'=>2, 'title'=>'Javascript','description'=>'This is description', 'posted_by'=>'Nour','created_at'=>'2021-03-13']
        // ];
        $posts = Post::all();//select*from posts; 
        //dd($posts); 
        return view('posts.index', [
            'posts'=>$posts
        ]);
    }
    public function show($post)
    {
        // $post=['id'=>1, 'title'=>'Laravel','description'=>'This is description', 'posted_by'=>'Nadine','created_at'=>'2021-03-13'];
        // dd($post);
        //$post=Post::find($post);
        //  $post=Post::where("title",'JS')->first();//Select * from posts where title = 'JS' limit 1;
        //when you use where and first, It makes limit =1 and returns first match result.
        // dd($post); 
        // $post = Post::where('title', '=', 'JS')->get();
        // dd($post); 
        $post = Post::find($post);
        return view('posts.show',[
            'post'=>$post
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        //dd('We are in store');
        return redirect()->route('posts.index');
    }
    public function edit($post){
        //logic for saving in db
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'Show Post Description', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'];

        return view('posts.edit',[
            'post'=>$post            
        ]);
    }
    public function update($post)
    {
        //logic for saving in db
        // dd("skksks");
        return redirect()->route('posts.index');
        // return view('posts.index');
    }
}
