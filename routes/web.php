<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//post
Route::get('/post/list', 'PostController@index')->name('post.list');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
Route::get('/post/delete/{id}', 'PostController@delete')->name('post.delete');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

//comment
Route::get('/comment/list', 'CommentController@index')->name('comment.list');
Route::get('/comment/create/{id}', 'CommentController@create')->name('comment.create');
Route::post('/comment/store', 'CommentController@store')->name('comment.store');
Route::get('/comment/edit/{id}', 'CommentController@edit')->name('comment.edit');
Route::post('/comment/update/{id}', 'CommentController@update')->name('comment.update');
Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');

