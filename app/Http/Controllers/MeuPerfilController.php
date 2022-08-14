<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class MeuPerfilController extends Controller
{
    public function index()
    {       
        $user = auth()->user();     
        return view('static_pages.perfil.meuPerfil')->with(compact('user'));
    }

    public function init_Edit()
    {       
        $user = auth()->user();     
        return view('static_pages.perfil.alterarInfo')->with(compact('user'));
    }
}
