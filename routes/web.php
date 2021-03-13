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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $posts=[
        ['id'=>1, 'title'=>'Laravel', 'posted_by'=>'Nadine','created_at'=>'2021-03-13'],
        ['id'=>2, 'title'=>'Javascript', 'posted_by'=>'Nour','created_at'=>'2021-03-13']
    ];
    return view('test', [
        'posts'=>$posts
    ]);
});

