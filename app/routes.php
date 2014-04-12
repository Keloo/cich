<?php

Route::get('/', function() {
    return View::make('index');
});

Route::get('/page', function() {
    return View::make('page');
});

Route::get('/admin', array('before' => 'adminAuth', function () {
    $adminController = new AdminController();
    return $adminController->index();
}));

Route::get('/admin/login', function() {
    return View::make('admin/login');
});

Route::get('/admin/menu', function() {
    $adminController = new AdminController();
    return $adminController->menu();
});

Route::get('/admin/edit/{id}', function($id) {
    $adminController = new AdminController();
    return $adminController->pageEdit($id);
});

Route::post('/admin/login', 'AdminController@login');

Route::post('/admin/createPage', 'AdminController@createPage');

Route::post('/admin/createMenu', 'AdminController@createMenu');

Route::post('/admin/editPage', 'AdminController@etidPage');