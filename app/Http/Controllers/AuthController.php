<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Mostrar formulario de registro
     */
    public function showRegistroForm()
    {
        return view('public.registro');
    }
    
    /**
     * Procesar el registro de usuario
     */
    public function registro(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'country' => 'required|string|max:255',
            'state' => 'required_if:country,*|string|max:255',
            'phone' => 'required|string|max:20',
            'role' => 'required|string|max:255',
            'academic_degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'other_institution' => 'nullable|string|max:255|required_if:institution,Otra',
            'matricula' => 'nullable|string|max:9|required_if:institution,BUAP',
            'faculty' => 'nullable|string|max:255|required_if:institution,BUAP',
            'how_found' => 'required|string|max:255',
        ], [
            'state.required_if' => 'El campo estado es obligatorio cuando se selecciona un país.',
            'other_institution.required_if' => 'El nombre de la institución es obligatorio cuando selecciona "Otra".',
            'matricula.required_if' => 'La matrícula es obligatoria cuando selecciona "BUAP".',
            'faculty.required_if' => 'La facultad es obligatoria cuando selecciona "BUAP".',
        ]);
        
        $userData = [
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country,
            'state' => $request->state,
            'phone' => $request->phone,
            'role' => $request->role,
            'academic_degree' => $request->academic_degree,
            'institution' => $request->institution,
            'how_found' => $request->how_found,
        ];
        
        if ($request->institution == 'BUAP') {
            $userData['matricula'] = $request->matricula;
            $userData['faculty'] = $request->faculty;
        } elseif ($request->institution == 'Otra') {
            $userData['other_institution'] = $request->other_institution;
        }
        
        $user = User::create($userData);
        
        Auth::login($user);
        
        return redirect()->route('user.inicio')->with('success', '¡Registro exitoso! Bienvenido a CONACIC.');
    }
    
    /**
     * Mostrar formulario de acceso
     */
    public function showAccesoForm()
    {
        return view('public.acceso');
    }
    
    /**
     * Procesar el inicio de sesión
     */
    public function acceso(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('user.inicio'))->with('success', '¡Bienvenido de nuevo!');
        }
        
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
    
    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('inicio');
    }
}