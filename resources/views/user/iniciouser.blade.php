@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Bienvenido a CONACIC') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>¡Hola, {{ Auth::user()->name }}!</h4>
                    <p>Has iniciado sesión correctamente en tu cuenta de CONACIC.</p>
                    
                    <div class="mt-4">
                        <h5>¿Qué puedes hacer ahora?</h5>
                        <ul>
                            <li>Explorar los talleres disponibles</li>
                            <li>Revisar el programa del congreso</li>
                            <li>Actualizar tu información personal</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h5>Talleres disponibles</h5>
                        <div class="list-group">
                            <a href="{{ route('taller1') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Taller 1</h5>
                                    <small>Disponible</small>
                                </div>
                                <p class="mb-1">Descripción del taller 1.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection