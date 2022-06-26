<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("static_pages.homes.login");
    }

    public function indexRegistro(){
        return view("static_pages.homes.registro");
    }

    public function indexAlterarInfo(){
        return view("static_pages.homes.alterarInfo");
    }
}
