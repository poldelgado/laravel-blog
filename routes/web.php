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



// Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

        //Categories
        Route::resource('categories', 'CategoryController', ['except' => 'create']);

        //Tags
        Route::resource('tags', 'TagController', ['except' => 'create']);

        // Comments
        Route::post('comments/{post_id}', 'CommentsController@store')->name('comments.store');
        Route::get('comments/{id}/edit', 'CommentsController@edit')->name('comments.edit');
        Route::put('comments/{id}', 'CommentsController@update')->name('comments.update');
        Route::delete('comments/{id}', 'CommentsController@destroy')->name('comments.destroy');
        Route::get('comments/{id}/delete', 'CommentsController@delete')->name('comments.delete');

Route::get('blog/{slug}','BlogController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');
Route::get('blog', 'BlogController@getIndex')->name('blog.index');
Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@getContact');
Route::post('/contact','PagesController@postContact');
Route::resource('posts', 'PostController');


