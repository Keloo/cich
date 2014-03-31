<?php

Route::get('/', function() {
    return View::make('index');
});

Route::get('/page', function() {
    return View::make('page');
});

Route::get('/admin', array('before' => 'adminAuth', function() {
    return View::make('admin/index');
}));

Route::get('/admin/login', function() {
    return View::make('admin/login');
});

Route::post('/admin/login', 'AdminController@login');

Route::post('/admin/createPage', 'AdminController@createPage');