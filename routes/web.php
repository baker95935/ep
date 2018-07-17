<?php

Route::get('/', 'indexController@index')->name('home');

Route::get('/home', function () {
    return redirect('login');
});


Route::get('/meilensteine', 'MilestonesController@index');

Route::get('/meilensteine/{meilenstein}', 'MilestonesController@show');

Route::get('/meilensteine/{meilenstein}/aufgaben', 'MilestonesController@allSpecificTasks');

Route::post('/meilensteine/store', 'MilestonesController@store');

Route::get('/meilensteine/{meilenstein}/edit', 'MilestonesController@edit');

Route::post('/meilensteine/update', 'MilestonesController@update');

Route::get('/meilensteine/update', 'MilestonesController@update');


Route::get('/aufgaben', 'TasksController@index');

Route::get('/aufgaben/{aufgabe}', 'TasksController@show');

Route::post('aufgaben/store', 'TasksController@store');

Route::post('/aufgaben/update', 'TasksController@update');

Route::post('/aufgaben/destroy', 'TasksController@destroy');


Route::get('/login', 'authController@viewLogin')->name('login');

Route::post('/login', 'authController@doLogin');

Route::get('/logout', 'authController@logout');
