<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//dd(TestController::class);//die_dump=>means var_dump(); then exit;
//Route::get('test2', [TestController::class, 'testAction']);

Route::get('posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts',[PostController::class, 'store'])->name('posts.store');
Route::put('/posts/{post}',[PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');
Route::get('posts.index', function ()
 {
    // $posts=[
    //     ['id'=>1, 'title'=>'Laravel', 'posted_by'=>'Nadine','created_at'=>'2021-03-13'],
    //     ['id'=>2, 'title'=>'Javascript', 'posted_by'=>'Nour','created_at'=>'2021-03-13']
    // ];
    // return view('index', [
    //     'posts'=>$posts
    // ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
