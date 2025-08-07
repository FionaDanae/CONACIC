<?php

namespace App\Http\Controllers;

use App\Models\TallerRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TallerController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        // El middleware 'auth' se aplica en las rutas
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
        // No necesitamos validar la matrícula ya que se toma del perfil del usuario
        
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
            'matricula' => Auth::user()->institution === 'BUAP' ? Auth::user()->matricula : null,
            'registro_id' => $registroId
        ]);
        
        return redirect()->back()->with('success', 'Te has registrado exitosamente al taller. Tu número de registro es: ' . $registroId);
    }
    
    /**
     * Mostrar el formulario de registro para el taller 2
     */
    public function taller2()
    {
        // Verificar si el usuario ya está registrado en este taller
        $registro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 2)
            ->first();
            
        return view('user.registrotalleres.taller2', compact('registro'));
    }
    
    /**
     * Procesar el registro para el taller 2
     */
    public function registrarTaller2(Request $request)
    {
        // Verificar si el usuario ya está registrado en este taller
        $existeRegistro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 2)
            ->exists();
            
        if ($existeRegistro) {
            return redirect()->back()->with('error', 'Ya estás registrado en este taller.');
        }
        
        // Obtener el último registro_id o iniciar en 1 si no hay registros
        $ultimoRegistro = TallerRegistro::where('taller_id', 2)->orderBy('registro_id', 'desc')->first();
        $registroId = $ultimoRegistro ? $ultimoRegistro->registro_id + 1 : 1;
        
        // Crear el registro
        TallerRegistro::create([
            'user_id' => Auth::id(),
            'taller_id' => 2,
            'nombre' => Auth::user()->name,
            'email' => Auth::user()->email,
            'matricula' => Auth::user()->institution === 'BUAP' ? Auth::user()->matricula : null,
            'registro_id' => $registroId
        ]);
        
        return redirect()->back()->with('success', 'Te has registrado exitosamente al taller. Tu número de registro es: ' . $registroId);
    }
    
    /**
     * Mostrar el formulario de registro para el taller 3
     */
    public function taller3()
    {
        // Verificar si el usuario ya está registrado en este taller
        $registro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 3)
            ->first();
            
        return view('user.registrotalleres.taller3', compact('registro'));
    }
    
    /**
     * Procesar el registro para el taller 3
     */
    public function registrarTaller3(Request $request)
    {
        // Verificar si el usuario ya está registrado en este taller
        $existeRegistro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 3)
            ->exists();
            
        if ($existeRegistro) {
            return redirect()->back()->with('error', 'Ya estás registrado en este taller.');
        }
        
        // Obtener el último registro_id o iniciar en 1 si no hay registros
        $ultimoRegistro = TallerRegistro::where('taller_id', 3)->orderBy('registro_id', 'desc')->first();
        $registroId = $ultimoRegistro ? $ultimoRegistro->registro_id + 1 : 1;
        
        // Crear el registro
        TallerRegistro::create([
            'user_id' => Auth::id(),
            'taller_id' => 3,
            'nombre' => Auth::user()->name,
            'email' => Auth::user()->email,
            'matricula' => Auth::user()->institution === 'BUAP' ? Auth::user()->matricula : null,
            'registro_id' => $registroId
        ]);
        
        return redirect()->back()->with('success', 'Te has registrado exitosamente al taller. Tu número de registro es: ' . $registroId);
    }
    
    /**
     * Mostrar el formulario de registro para el taller 4
     */
    public function taller4()
    {
        // Verificar si el usuario ya está registrado en este taller
        $registro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 4)
            ->first();
            
        return view('user.registrotalleres.taller4', compact('registro'));
    }
    
    /**
     * Procesar el registro para el taller 4
     */
    public function registrarTaller4(Request $request)
    {
        // Verificar si el usuario ya está registrado en este taller
        $existeRegistro = TallerRegistro::where('user_id', Auth::id())
            ->where('taller_id', 4)
            ->exists();
            
        if ($existeRegistro) {
            return redirect()->back()->with('error', 'Ya estás registrado en este taller.');
        }
        
        // Obtener el último registro_id o iniciar en 1 si no hay registros
        $ultimoRegistro = TallerRegistro::where('taller_id', 4)->orderBy('registro_id', 'desc')->first();
        $registroId = $ultimoRegistro ? $ultimoRegistro->registro_id + 1 : 1;
        
        // Crear el registro
        TallerRegistro::create([
            'user_id' => Auth::id(),
            'taller_id' => 4,
            'nombre' => Auth::user()->name,
            'email' => Auth::user()->email,
            'matricula' => Auth::user()->institution === 'BUAP' ? Auth::user()->matricula : null,
            'registro_id' => $registroId
        ]);
        
        return redirect()->back()->with('success', 'Te has registrado exitosamente al taller. Tu número de registro es: ' . $registroId);
    }
}