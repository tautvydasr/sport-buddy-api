<?php

Route::get('/', 'Controller@v1')->name('api.v1');
Route::apiResource('locations', 'LocationController')->only(['index', 'show']);
Route::apiResource('categories', 'CategoryController')->only(['index']);
Route::apiResource('events', 'EventController')->only(['index', 'show', 'store']);
Route::post('events/{event}/participate/{user}', 'EventController@participate')->name('events.participate');
Route::apiResource('users', 'UserController')->only(['index', 'show']);
