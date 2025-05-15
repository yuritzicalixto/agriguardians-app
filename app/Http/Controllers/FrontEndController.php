<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){
        return view('sitio.pages.index');//busca la vista que va a utilizar
    }

    function preguntas(){
        return view('sitio.pages.preguntas');
    }

    function registro(){
        return view('sitio.pages.registro');
    }


    function login(){
        return redirect()->route('login');
    }
}
