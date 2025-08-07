<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Mostrar página de inicio para usuarios autenticados
     */
    public function inicioUser()
    {
        return view('user.iniciouser');
    }
}