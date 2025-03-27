@extends('layouts.public')

@section('titulo', 'ACCESO')

@section('contenido')
<div class="min-h-screen relative">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/CONACIC ROBOT_2.jpeg') }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#05225c]/10"></div>
    </div>

    <!-- Login -->
    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="max-w-md mx-auto bg-white/95 backdrop-blur-sm rounded-lg shadow-xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-[#061d3f]">ACCESO CONACIC</h2>
                <p class="text-gray-600 mt-2">Ingresa a tu cuenta de CONACIC</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#23b0d8] focus:border-transparent transition-colors"
                               placeholder="ejemplo@alumno.buap.mx">
                    </div>
                </div>

                <div>
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-2 px-4 rounded-md hover:opacity-90 transition-opacity">
                        Ingresar
                    </button>
                </div>
            </form>

            <!-- Registro -->
            <div class="text-center mt-6">
                <p class="text-gray-600">
                    ¿No tienes cuenta? 
                    <a href="{{ route('registro') }}" class="text-[#1669bc] hover:text-[#23b0d8] font-semibold transition-colors">
                        Regístrate aquí
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection