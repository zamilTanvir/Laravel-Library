<?php

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


    Route::get('/',['uses' => 'PostController@getIndex', 'as' => 'blog.welcome']);

    Route::get('post/{id}', ['uses' => 'PostController@getPost', 'as' => 'other.post']);

    Route::get('about', function () {
    return view ('other.about');
    })->name('other.about');

    Route::group(['prefix' => 'other'], function () {

    Route::get('admin', ['uses' => 'PostController@getAdminIndex', 'as' => 'other.admin']);

    Route::get('create', ['uses' => 'PostController@getAdminCreate', 'as' => 'other.create']);

    Route::post('create', ['uses' => 'PostController@postAdminCreate', 'as' => 'other.build']);

    Route::get('edit/{id}', ['uses' => 'PostController@getAdminEdit', 'as' => 'other.edit']);

    Route::post('edit', ['uses' => 'PostController@postAdminUpdate', 'as' => 'other.update']);
});




