<?php

class AdminController extends BaseController {

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