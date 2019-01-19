<?php

	Route::get('/','Auth\LoginController@showLoginForm'); 

	
	Route::post('login','Auth\LoginController@login')->name('login');
	Route::post('logout','Auth\LoginController@logout')->name('logout');
	Route::get ('inicio','HomeController@index')->name('inicio');




Route::group(['middleware' => 'auth'], function () {



	Route::resource('/socios','SocioController');
	Route::resource('/tutores','TutorController');
	Route::resource('/usuario','Auth\RegisterController');
	Route::resource('/club','ClubController');
	Route::resource('/documentacion','DocumentacionController');
	Route::resource('/DocSocio','DocSocioController');

    Route::get('DocSocio/create/{idSocio}',[
 		'uses' => 'DocSocioController@create',
  		'as' => 'DocSocio.create'

 	]);


	Route::get('socios/destroy/{idSocio}',[
 		'uses' => 'SocioController@destroy',
  		'as' => 'socios.destroy'

 	]);

	Route::get('socios/buscarTutor/{idSocio}',[
 		'uses' => 'SocioController@buscarTutor',
  		'as' => 'socios.buscarTutor',
  		
 	]);

	Route::get('socios/listarSocios/{idTutor}',[
 		'uses' => 'SocioController@listarSocios',
  		'as' => 'socios.listarSocios',
  		
 	]);


	Route::get('socios/cambiarTutor/{idSocio}',[
 		'uses' => 'SocioController@cambiarTutor',
  		'as' => 'socios.cambiarTutor',
  		
 	]);


	Route::get('socios/updateTutor/{idSocio},{idTutor}',[
 		'uses' => 'SocioController@updateTutor',
  		'as' => 'socios.updateTutor',
  		
 	]);


	Route::get('socios/desvincularTutor/{idSocio}',[
 		'uses' => 'SocioController@desvincularTutor',
  		'as' => 'socios.desvincularTutor',
  		
 	]);


	Route::get('tutores/asignartutor/{idSocio}',function(){
		return view('tutores/asignartutor');
	}
  		
 	);


 	Route::get('tutores/destroy/{idTutor}',[
 		'uses' => 'TutorController@destroy',
  		'as' => 'tutores.destroy'

 	]);

 
	Route::get('/usuario/destroy/{id}',[
	 'uses' => 'Auth\RegisterController@destroy',
	  'as' => 'usuario.destroy'

	 ]);

	Route::get('/documentacion/destroy/{idDocumentacion}',[
	 'uses' => 'DocumentacionController@destroy',
  		'as' => 'documentacion.destroy'

	 ]);

	Route::get('DocSocio/destroy/{idDocSocio}',[
 		'uses' => 'DocSocioController@destroy',
  		'as' => 'DocSocio.destroy'

 	]);

	
	Route::get('/DocSocio/downloadFile/{file}',[
 		'uses' => 'DocSocioController@downloadFile',
  		'as' => 'DocSocio.downloadFile'

 	]);

});
	

