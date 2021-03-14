<?php


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


use Illuminate\Support\Facades\Route;
Route::get('/', function ()
{
    return view('welcome');
});
use App\Http\Controllers\PostController;
//dd(TestController::class);//die_dump=>means var_dump(); then exit;
//Route::get('test2', [TestController::class, 'testAction']);
Route::get('posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
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

