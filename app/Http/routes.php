<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'uses'=> 'NewsController@getIndex',
    'as'=> 'home.index'
]);

Route::group(['middleware'=>'guest'],function(){

	Route::get('/signin',[
			'uses'=> 'UserController@getSignin',
			'as'=> 'admin.signin'
		]);

	Route::post('/signin',[
			'uses'=> 'UserController@postSignin',
			'as'=> 'admin.signin'
		]);

});

Route::group(['middleware'=>'auth'],function(){
	Route::get('/profile',[
			'uses'=> 'UserController@getProfile',
			'as'=> 'admin.profile'
		]);

Route::get('/logout',[
			'uses'=> 'UserController@getLogout',
			'as'=> 'admin.logout'
		]);

Route::get('/logout',[
			'uses'=> 'UserController@getLogout',
			'as'=> 'admin.logout'
		]);

Route::get('/create',[
			'uses'=> 'NewsController@getCreate',
			'as' => 'admin.create'
		]);

Route::post('/create',[
			'uses'=>'NewsController@postCreate',
			'as'=> 'admin.create'
		]);

Route::resource('news','NewsController');


});

Route::resource('newspage','AnotherNewsController');