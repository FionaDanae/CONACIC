<?php

namespace App\Http\Controllers;

use App\Models\TallerRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TallerController extends Controller
{
    /**
     * Constructor para asegurar que el usuario esté autenticado
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Mostrar el formulario de registro para el taller 1
     */
    public function taller1()
    {
        // Verificar si el usuario ya está registrado en este taller
        $registro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 1)
            ->first();
            
        return view('user.registrotalleres.taller1', compact('registro'));
    }
    
    /**
     * Procesar el registro para el taller 1
     */
    public function registrarTaller1(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'matricula' => 'required|string|max:255',
        ]);
        
        // Verificar si el usuario ya está registrado en este taller
        $existeRegistro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 1)
            ->exists();
            
        if ($existeRegistro) {
            return redirect()->back()->with('error', 'Ya estás registrado en este taller.');
        }
        
        // Obtener el último registro_id o iniciar en 1 si no hay registros
        $ultimoRegistro = TallerRegistro::where('taller_id', 1)->orderBy('registro_id', 'desc')->first();
        $registroId = $ultimoRegistro ? $ultimoRegistro->registro_id + 1 : 1;
        
        // Crear el registro
        TallerRegistro::create([
            'user_id' => Auth::id(),
            'taller_id' => 1,
            'nombre' => Auth::user()->name,
            'email' => Auth::user()->email,
            'matricula' => $request->matricula,
            'registro_id' => $registroId
        ]);
        
        return redirect()->back()->with('success', 'Te has registrado exitosamente al taller. Tu número de registro es: ' . $registroId);
    }
}