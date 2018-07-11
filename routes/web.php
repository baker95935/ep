<?php

Route::get('/', 'PagesController@index')->name('home');

Route::get('/meilensteine', 'MilestonesController@index');

Route::get('/meilensteine/{meilenstein}', 'MilestonesController@show');

Route::get('/meilensteine/{meilenstein}/aufgaben', 'MilestonesController@allSpecificTasks');

Route::get('/aufgaben', 'TasksController@index');

Route::get('/aufgaben/{aufgabe}', 'TasksController@show');

Route::get('/login', 'PagesController@login');

 
Route::post('/meilensteine/store', 'MilestonesController@store');

Route::post('/aufgaben/store', 'TasksController@store');

Route::get('/meilensteine/{meilenstein}/edit', 'MilestonesController@edit');

Route::post('/meilensteine/ajaxEdit', 'MilestonesController@ajaxEdit');

Route::post('/meilensteine/update', 'MilestonesController@update');

Auth::routes();
