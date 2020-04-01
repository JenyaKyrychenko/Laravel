<?php

Route::get('/home', function () {
    return view('welcome');
});

Route::post('/input', 'DataController@run')->name('input-form');

Route::get('/post/1', function () {
    return view('FirstPost');
});

Route::get('/data', 'DataController@getData')->name('data-info');

Route::get('/post/2', function () {
    return view('SecondPost');
});