<?php

class AdminController extends BaseController {


    public function login() {
        if (Auth::check()) {
            return Redirect::intended('admin/index');
        }
//        if (Auth::attempt(array('email' => $email))) {
//
//        }
    }

}