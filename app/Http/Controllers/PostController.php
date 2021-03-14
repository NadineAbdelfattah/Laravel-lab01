<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=[
            ['id'=>1, 'title'=>'Laravel', 'posted_by'=>'Nadine','created_at'=>'2021-03-13'],
            ['id'=>2, 'title'=>'Javascript', 'posted_by'=>'Nour','created_at'=>'2021-03-13']
        ];
        return view('posts.index', [
            'posts'=>$posts
        ]);
    }
}
