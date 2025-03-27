<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function inicio(){
        return view('public.inicio');
    }

    public function convocatoria(){
        return view('public.convocatoria');
    }

    public function programa(){
        return view('public.programa');
    }

    public function registro(){
        return view('public.registro');
    }

    public function acceso(){
        return view('public.acceso');
    }

    public function libros(){
        return view('public.libros');
    }

    public function galeria(){
        return view('public.galeria');
    }
}
