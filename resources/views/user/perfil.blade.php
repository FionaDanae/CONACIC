@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-3xl">
        <h1 class="text-4xl font-bold text-[#061d3f] mb-8 text-center">Mi Perfil</h1>

        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-[#061d3f] rounded-full w-24 h-24 flex items-center justify-center text-white text-3xl font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>

            <table class="w-full text-left">
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <th class="py-2 font-semibold text-gray-700 w-1/3">Nombre Completo</th>
                        <td class="py-2 text-gray-900">{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-gray-700">Correo Electrónico</th>
                        <td class="py-2 text-gray-900">{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-gray-700">Teléfono</th>
                        <td class="py-2 text-gray-900">{{ Auth::user()->telefono ?? 'No proporcionado' }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-gray-700">Institución</th>
                        <td class="py-2 text-gray-900">{{ Auth::user()->institucion ?? 'No proporcionado' }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-gray-700">Carrera</th>
                        <td class="py-2 text-gray-900">{{ Auth::user()->carrera ?? 'No proporcionado' }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 font-semibold text-gray-700">Grado / Experiencia</th>
                        <td class="py-2 text-gray-900">{{ Auth::user()->grado ?? 'No proporcionado' }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 text-center">
                <a href="{{ route('user.inicio') }}" class="px-6 py-2 bg-[#061d3f] text-white rounded-lg hover:bg-[#0c3c82] transition-colors">
                    Volver al Inicio
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
