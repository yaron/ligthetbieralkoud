<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'BeerController@Frontpage');
    Route::get('/json', 'BeerController@Json');
    Route::get('/update', [
        'uses' => 'BeerController@Update',
        'as'  => 'beer.update',
    ]);
    Route::post('/update', 'BeerController@UpdateSave');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/youtube', 'YoutubeController@index');
        Route::get('/youtube/add', [
          'uses' => 'YoutubeController@create',
          'as' => 'youtube.add'
        ]);
        Route::post('/youtube/add', 'YoutubeController@postCreate');
    });

    // Authentication routes...
    Route::get('auth/login', [
      'uses' => 'Auth\AuthController@getLogin',
      'as' => 'auth.login',
    ]);
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
});
