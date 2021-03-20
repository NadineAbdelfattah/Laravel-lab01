<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Fascades\DB;




class PostController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
        return view('posts.create',[
            'users'=>User::all()
        ]);
    }
    public function store(Request $myRequestObject)
    {
        $data = $myRequestObject->all();
       // dd($data);
       $this->validate($myRequestObject,[
           'title'=>'required',
           'description'=>'required'
       ],[
           'title.required'=>'Please enter the title'
       ]);
        Post::create($data);
        
        //dd('We are in store');
        //logic for saving in DB:
            //get the request data
            //insert this request data into DB

            // $data = request()->all();
            //Create method accepts associative array.
            // Post::create([
            //     'title'=>$data['title'],
            //     'description'=>$data['description'],
            //     'id'=>14,//It will  be ignored because it is not included in $fillable->Post.php

            // ]);
           //we can use:request()->title; Or request->description;
           // dd(request(),$myRequestObj);


           //WITH THIS SYNTAX YOU DON'T NEED TO USE FILLABLE..
        //    $post = new Post;
        //     $post->title=$data['title'];
        //     $post->description = $data['description'];
        //     $post->save();

           //Post::create($data);
        return redirect()->route('posts.index');
    }
    public function edit($post)
    {
      
      $post = Post::find($post);
     // dd($post)  ;  
        return view('posts.edit' , [
            'post'=> $post
        ]);
    }
    public function update($post,Request $req)
    {
        //logic for saving in db
        // dd("skksks");
        // return $req->input();
    //    $data = $req;
       $data=$req->all();
       Post::find($post)->update($data);

         return redirect()->route('posts.index');
    }
    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index');
       
    }
}
