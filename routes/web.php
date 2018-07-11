<?php

Route::get('/', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')->where('id','[0-9]+');

Route::get('/usuario/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');