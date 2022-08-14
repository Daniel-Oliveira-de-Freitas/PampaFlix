<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function updateInfo(Request $req){
        $userDB = User::find(auth()->user()->id);
        $userDB->name = $req->uname;
        $userDB->lastName = $req->sobrenome;
        $userDB->email = $req->email;
        $userDB->password = bcrypt($req->psw);
        $userDB->update();
        return redirect()->route('home')->with(compact('userDB'));
    }
}
