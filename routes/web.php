<?php

	Route::get('/','Auth\LoginController@showLoginForm'); 

	
	Route::post('login','Auth\LoginController@login')->name('login');
	Route::post('logout','Auth\LoginController@logout')->name('logout');
	Route::get ('inicio','HomeController@index')->name('inicio');




Route::group(['middleware' => 'auth'], function () {



	Route::resource('/socios','SocioController');
	Route::resource('/usuario','Auth\RegisterController');
	Route::resource('/club','ClubController');




	Route::get('socios/{idSocio}/destroy',[
 		'uses' => 'SocioController@destroy',
  		'as' => 'socios.destroy'

 	]);

	Route::get('/usuario/{id}/destroy',[
	 'uses' => 'Auth\RegisterController@destroy',
	  'as' => 'usuario.destroy'

	 ]);

});
	

