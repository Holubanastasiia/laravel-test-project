<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
        return "Register user";
    }

    public function login() {
        return "Login user";
    }

    public function show($id) {
        return "User with id -  $id";
    }

    public function destroy($id) {
        return "Delete user with id - $id";
    }
}
