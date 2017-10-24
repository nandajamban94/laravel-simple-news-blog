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
			'as'=> 'admin.profile',
			'prefix'=>'admin'
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
				'as' => 'admin.create',
				'prefix'=>'admin'
			]);

	Route::post('/create',[
				'uses'=>'NewsController@postCreate',
				'as'=> 'admin.create',
				'prefix'=>'admin'
			]);

	Route::resource('news','NewsController');

	Route::get('/panelagenda',[
				'uses'=>'AgendaController@getAgendaPage',
				'as'=> 'admin.agenda',
				'prefix'=>'admin'
			]);

	Route::get('/createagenda',[
				'uses'=>'AgendaController@getCreateAgendaPage',
				'as'=> 'admin.createagenda',
				'prefix'=>'admin'
			]);

	Route::post('/createagenda',[
				'uses'=> 'AgendaController@postCreateAgendaPage',
				'as' => 'admin.createagenda',
				'prefix'=>'admin'
			]);


	Route::resource('agendas','AgendaController');

	Route::get('/uploadfile',[ //ke halaman upload
			'uses'=>'UploadFileController@getIndex',
			'as'=>'admin.uplaodfile',
			'prefix'=>'admin'
		]);

	Route::post('admin/store','UploadFileController@store'); //untuk upload 

	Route::get('admin/showfile','UploadFileController@showall');

	Route::resource('files','UploadFileController');
});

Route::get('/portalagenda',[
		'uses'=> 'AnotherAgendaController@getIndex',
		'as'=> 'portal.portalagenda'

]);

Route::get('/produkhukum',[
		'uses'=> 'AnotherFileController@getIndex',
		'as'=> 'portal.produkhukum'

]);

Route::get('/agenda',[
	'uses'=> 'AnotherAgendaController@showAgenda',
	 'as'=> 'agenda.simplified'
]);


Route::resource('publicportalagenda','AnotherAgendaController');

Route::resource('newspage','AnotherNewsController');

Route::get('dprd/pimpinan',[
	'uses' => 'DprdController@getHalamanPimpinan',
	'as' => 'dprd.pimpinan'
]);

Route::get ('dprd/komisi',[
	'uses' => 'DprdController@getHalamanKomisi',
	'as' => 'dprd.komisi'
]);

Route::get ('dprd/badan_musyawarah',[
	'uses' => 'DprdController@getHalamanKomisiBadanMusyawarah',
	'as' => 'dprd.badan_musyawarah'
]);

Route::get ('dprd/badan_anggaran',[
	'uses' => 'DprdController@getHalamanBadanAnggaran',
	'as' => 'dprd.badan_anggaran'
]);

Route::get ('dprd/badan_pembentukan_perda',[
	'uses' => 'DprdController@getHalamanBadanPembentukanPerda',
	'as' => 'dprd.badan_pembentukan_perda'
]);

Route::get ('dprd/badan_kehormatan',[
	'uses' => 'DprdController@getBadanKehormatan',
	'as' => 'dprd.badan_kehormatan'
]);

Route::get ('dprd/fraksi',[
	'uses' => 'DprdController@getHalamanFraksi',
	'as' => 'dprd.fraksi'
]);

