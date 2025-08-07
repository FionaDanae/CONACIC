@extends('layouts.app')

@section('content')
<div class="min-h-screen relative">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/WORKSHOP.webp') }}" alt="Taller Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#05225c]/20"></div>
    </div>

    <!-- Registration Form -->
    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto bg-white/95 backdrop-blur-sm rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-8">Registro al Taller</h2>
            <h3 class="text-2xl font-bold text-[#1669bc] text-center mb-6">Taller de Desarrollo de Aplicaciones Móviles con Flutter</h3>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            @if($registro)
                <!-- Si ya está registrado, mostrar información del registro -->
                <div class="bg-gray-50 rounded-lg p-6 mb-6">
                    <h4 class="text-xl font-semibold text-[#061d3f] mb-4">Información de tu registro</h4>
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-500">Nombre:</p>
                                <p class="font-medium">{{ $registro->nombre }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Correo electrónico:</p>
                                <p class="font-medium">{{ $registro->email }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @if($registro->matricula)
                            <div>
                                <p class="text-sm text-gray-500">Matrícula:</p>
                                <p class="font-medium">{{ $registro->matricula }}</p>
                            </div>
                            @endif
                            <div>
                                <p class="text-sm text-gray-500">Número de registro:</p>
                                <p class="font-medium text-[#1669bc]">{{ $registro->registro_id }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 mb-6" role="alert">
                    <p class="font-medium">Ya estás registrado en este taller.</p>
                    <p>Recuerda que solo puedes registrarte en un taller por persona.</p>
                </div>

                <div class="mt-6 p-4 bg-gray-100 rounded-lg">
                    <h6 class="font-semibold text-[#061d3f] mb-2">Material Requerido:</h6>
                    <p class="text-gray-600">Computadora con Flutter SDK instalado, Android Studio o VS Code, dispositivo móvil o emulador Android/iOS</p>
                </div>

                <div class="flex justify-center mt-6">
                    <a href="{{ route('user.inicio') }}" class="bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-3 px-8 rounded-full text-lg hover:opacity-90 transition-opacity transform hover:scale-105 duration-200">
                        Volver a inicio
                    </a>
                </div>
            @else
                <!-- Si no está registrado, mostrar formulario de registro -->
                <form action="{{ route('registrarTaller2') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Datos del usuario -->
                    <div class="space-y-6">
                        <h3 class="text-xl font-semibold text-[#1669bc] border-b-2 border-[#23b0d8] pb-2">DATOS DEL PARTICIPANTE</h3>

                        <div class="grid gap-6">
                            <!-- Nombre (no editable) -->
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                                <input type="text" id="nombre" name="nombre" value="{{ Auth::user()->name }}" readonly class="mt-1 block w-full rounded-md border-gray-300 bg-gray-100 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8]">
                            </div>

                            <!-- Email (no editable) -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly class="mt-1 block w-full rounded-md border-gray-300 bg-gray-100 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8]">
                            </div>

                            <!-- Matrícula (solo para usuarios de BUAP) -->
                            @if(Auth::user()->institution === 'BUAP')
                            <div>
                                <label for="matricula" class="block text-sm font-medium text-gray-700">Matrícula</label>
                                <input type="text" id="matricula" name="matricula" value="{{ Auth::user()->matricula }}" readonly class="mt-1 block w-full rounded-md border-gray-300 bg-gray-100 shadow-sm focus:border-[#23b0d8] focus:ring-[#23b0d8]">
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-gray-100 rounded-lg">
                        <h6 class="font-semibold text-[#061d3f] mb-2">Material Requerido:</h6>
                        <p class="text-gray-600">Computadora con Flutter SDK instalado, Android Studio o VS Code, dispositivo móvil o emulador Android/iOS</p>
                    </div>

                    <div class="bg-yellow-50 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                        <p class="font-medium">Importante:</p>
                        <p>Puedes registrarte en todos los talleres que desees, pero solo una vez en cada uno. Una vez completado el registro en un taller, no podrás cambiarlo.</p>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center pt-6">
                        <button type="submit" class="bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-3 px-8 rounded-full text-lg hover:opacity-90 transition-opacity transform hover:scale-105 duration-200">
                            Registrarme al Taller
                        </button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection