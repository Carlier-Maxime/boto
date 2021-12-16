<?php

use App\Http\Controllers\SerieController;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [SerieController::class,'home'])->name('home');

Route::resource('/serie', 'App\Http\Controllers\SerieController');


Route::get('/test', function (){
   dd(Comment::all()->first());
});
//Route::post("/login", );



Route::get('/comment/store/{id}', 'CommentController@store')->name('comment.store');

Route::get('/comment/edit/{id}', 'CommentController@edit')->name('comment.edit');

Route::get('/comment/update/{id}/{validated}', 'CommentController@update')->name('comment.update');

Route::get('/comment/destroy/{id}', 'CommentController@destroy')->name('comment.destroy');

Route::get('/serie/{id}', 'CommentController@create')->name('comment.create');

