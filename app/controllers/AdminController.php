<?php

class AdminController extends BaseController {

    /**
     * @return mixed
     */
    public function menu() {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $data = [];
        $data['pages'] = DB::select("select * from pages");

        return View::make('admin/menu', $data);
    }

    /**
     * @param null $id
     * @return mixed
     */
    public function pageEdit($id = null) {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $data = [];
        $data['currentPage'] = DB::select("select * from pages where id = ?", array($id))[0];
        $data['pages'] = DB::select("select * from pages");

        return View::make('admin/edit', $data);
    }

    /**
     * @return mixed
     */
    public function index() {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $data = [];
        $data['pages'] = DB::select("select * from pages");

        return View::make('admin/index', $data);
    }

    /**
     * @return mixed
     */
    public function login() {
        if (Auth::check()) {
            return Redirect::intended('admin');
        }
        $username = Input::get('username');
        $password = Input::get('password');

        if (Auth::attempt(array('username' => $username, 'password' => $password))) {
            return Redirect::to('admin');
        }
        return Redirect::to('admin/login');
    }

    /**
     * @return mixed
     */
    public function createPage() {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $pageContent = Input::get('pageText');

        DB::insert("insert into pages (id, text) values (?, ?)", array(null, $pageContent));

        return Redirect::to('admin');
    }

    /**
     * @return mixed
     */
    public function createMenu() {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $menuName = Input::get('menuName');
        $parentId = Input::get('parentId');

        DB::insert("insert into menu (id, name, parent_id) values (?, ?, ?)", array(null, $menuName, $parentId));

        return Redirect::to('admin');
    }
}