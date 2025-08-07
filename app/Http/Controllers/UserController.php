<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TallerRegistro;

class UserController extends Controller
{
    /**
     * Mostrar página de inicio para usuarios autenticados
     */
    public function inicioUser()
    {
        // Verificar en qué talleres está registrado el usuario
        $registrosTalleres = TallerRegistro::where('user_id', Auth::id())
            ->pluck('taller_id')
            ->toArray();
            
        return view('user.iniciouser', compact('registrosTalleres'));
    }
}