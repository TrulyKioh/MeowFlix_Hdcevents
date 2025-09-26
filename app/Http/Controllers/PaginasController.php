<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function login(){
        return view('login');
    }

    public function tela_inicial(){
        return view('tela_inicial');
    }

    public function criacao_de_filme(){
        return view('criacao_de_filme');
    }

    public function editar_filme(){
        return view('editar_filme');
    }
}