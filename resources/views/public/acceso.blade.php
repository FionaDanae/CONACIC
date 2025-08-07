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

            <!-- Mensajes de éxito y error -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">¡Bienvenido!</p>
                            <p class="text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">Error de acceso</p>
                            <p class="text-sm">Por favor, verifique sus credenciales:</p>
                            <ul class="text-sm mt-2">
                                @foreach($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('acceso.submit') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#23b0d8] focus:border-transparent transition-colors"
                               placeholder="ejemplo@alumno.buap.mx">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#23b0d8] focus:border-transparent transition-colors">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
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