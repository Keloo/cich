<?php

Route::get('/', function() {
    $baseController = new BaseController();
    return $baseController->index();
});

Route::get('/admin', array('before' => 'adminAuth', function () {
    $adminController = new AdminController();
    return $adminController->index();
}));


Route::get('/{lang}', function($lang) {
    $baseController = new BaseController();
    Session::put('lang', $lang);
    return $baseController->index();
});


Route::get('/page/{id}', function($id) {
    $baseController = new BaseController();
    return $baseController->page($id);
});


Route::get('/admin/login', function() {
    return View::make('admin/login');
});

Route::get('/admin/events', function() {
    $adminController = new AdminController();
    return $adminController->events();
});

Route::get('/admin/editEvent/{id}', function($id) {
    $adminController = new AdminController();
    return $adminController->editEvent($id);
});

Route::get('/admin/menu', function() {
    $adminController = new AdminController();
    return $adminController->menu();
});

Route::get('/admin/edit/{id}', function($id) {
    $adminController = new AdminController();
    return $adminController->pageEdit($id);
});

Route::get('/admin/editMenu/{id}', function($id) {
    $adminController = new AdminController();
    return $adminController->menuEdit($id);
});

Route::get('/admin/logout', function() {
    Auth::logout();
    return View::make('admin/login');
});


Route::post('/admin/login', 'AdminController@login');

Route::post('/admin/addEvent', 'AdminController@addEvent');

Route::post('/admin/updateEvent', 'AdminController@updateEvent');

Route::post('/admin/createPage', 'AdminController@createPage');

Route::post('/admin/createMenu', 'AdminController@createMenu');

Route::post('/admin/editPage', 'AdminController@editPage');

Route::post('/admin/updatePage', 'AdminController@updatePage');

Route::post('/admin/updateMenu', 'AdminController@updateMenu');
