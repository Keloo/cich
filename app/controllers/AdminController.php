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
        $data['menu'] = DB::select("select * from menu");

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


    public function menuEdit($id = null) {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $data = [];
        $data['currentItem'] = DB::select("SELECT * FROM menu WHERE id = ?", array($id))[0];
        $data['menu'] = DB::select("SELECT * FROM menu");

        return View::make('admin/editMenu', $data);
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
        $pageTitle = Input::get('pageTitle');

        DB::insert("INSERT INTO pages (id, title, text) VALUES(?, ?, ?)", array(null, $pageTitle, $pageContent));

        return Redirect::to('admin');
    }


    public function updatePage() {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $pageContent = Input::get('pageText');
        $pageTitle = Input::get('pageTitle');
        $id = Input::get('pageId');

        DB::update("UPDATE pages SET title = ?, text = ? WHERE id = ?", array($pageTitle, $pageContent, $id));

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

        return Redirect::to('admin/menu');
    }

    public function updateMenu() {
        if (!Auth::check()) {
            return Redirect::to('admin/login');
        }

        $menuId = Input::get('menuId');
        $menuName = Input::get('menuName');
        $parentId = Input::get('parentId');
        $deleteMenu = Input::get('deleteMenu');

        if (isset($deleteMenu)) {
            DB::delete("DELETE FROM menu WHERE id = ?", array($menuId));
        } else {
            DB::update("UPDATE menu SET name = ?, parent_id = ? WHERE id = ?", array($menuName, $parentId, $menuId));
        }

        return Redirect::to('admin/menu/');
    }
}