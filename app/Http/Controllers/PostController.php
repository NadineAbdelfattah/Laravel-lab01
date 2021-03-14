<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=[
            ['id'=>1, 'title'=>'Laravel', 'description'=>'This is description','posted_by'=>'Nadine','created_at'=>'2021-03-13'],
            ['id'=>2, 'title'=>'Javascript','description'=>'This is description', 'posted_by'=>'Nour','created_at'=>'2021-03-13']
        ];
        return view('posts.index', [
            'posts'=>$posts
        ]);
    }
    public function show($post)
    {
        $post=['id'=>1, 'title'=>'Laravel','description'=>'This is description', 'posted_by'=>'Nadine','created_at'=>'2021-03-13'];
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
        dd('We are in store');
    }
}
