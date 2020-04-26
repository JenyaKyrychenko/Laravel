<?php

Route::get('/home', function () {
    return view('welcome');
});

Route::post('/input','DataController@run')->name('input-form');

Route::get('/post/1', function () {
    return view('FirstPost');
});

Route::get('/data','UserController@getUser')->name('data-info');

Route::get('/post/2', function () {
    return view('SecondPost');
});

Route::get('/pages', function() {
    return view('PagesContent',['content' => null, 'eng' => false]);
});

Route::get('/pages/eng', function() {
    return view('PagesContent',['content' => null,'eng' => true]);
});

Route::get('/pages/eng/{url}', 'ControllerCMS@getEnglishContent');

Route::get('/pages/{url}', 'ControllerCMS@getContent');