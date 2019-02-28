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
Route::get('/',function(){
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});
Route::get('posts/{post}/comments/{comment}',function($postId, $commentId){

});

// Route::get('user/{age}', function ($age) {
//         return 'age = '.$age;
//    })->middleware('checkage');

// Route::get('user/list','UserController@show');
Route::resource('users','UserController');