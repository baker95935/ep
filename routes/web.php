<?php

Route::get('/', 'PagesController@index')->name('home');

Route::get('/meilensteine', 'MilestonesController@index');

Route::get('/meilensteine/{meilenstein}', 'MilestonesController@show');

Route::get('/meilensteine/{meilenstein}/aufgaben', 'MilestonesController@allSpecificTasks');

Route::get('/aufgaben', 'TasksController@index');

Route::get('/aufgaben/{aufgabe}', 'TasksController@show');

Route::get('/login', 'PagesController@login');

 
Route::post('/meilensteine/store', 'MilestonesController@store');

Auth::routes();
