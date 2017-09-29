<?php

namespace anuncios\Http\Controllers;

use Illuminate\Http\Request;
use anuncios\Clase;

class controladorPagina extends Controller
{
    public function panel()
    {
        return view('panel.inicio');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function inicio()
    {
        $clases=Clase::all();
        return view('anuncio.inicio',compact('clases'));
    }
    public function contacto()
    {
        function dameURL(){
            $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            return $url;
            }

     return view('anuncio.contacto');
    }
}
