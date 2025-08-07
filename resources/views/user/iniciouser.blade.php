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
                                    <h6 class="mb-1">De Enigmas a Evidencias: Taller Práctico de Análisis Forense</h6>
                                    <small class="{{ in_array(1, $registrosTalleres) ? 'text-primary' : 'text-success' }}">
                                        {{ in_array(1, $registrosTalleres) ? 'Registrado' : 'Disponible' }}
                                    </small>
                                </div>
                                <p class="mb-1">Aprende técnicas de análisis forense digital con herramientas especializadas.</p>
                                <small class="text-muted">Fecha: 15 de Noviembre, 2024 | Material: Computadora, software de virtualización, Kali/Parrot Linux</small>
                            </a>
                            
                            <a href="{{ route('taller2') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Taller de Desarrollo de Aplicaciones Móviles con Flutter</h6>
                                    <small class="{{ in_array(2, $registrosTalleres) ? 'text-primary' : 'text-success' }}">
                                        {{ in_array(2, $registrosTalleres) ? 'Registrado' : 'Disponible' }}
                                    </small>
                                </div>
                                <p class="mb-1">Desarrolla aplicaciones móviles multiplataforma usando Flutter.</p>
                                <small class="text-muted">Fecha: 16 de Noviembre, 2024 | Material: Computadora con Flutter SDK, Android Studio o VS Code</small>
                            </a>
                            
                            <a href="{{ route('taller3') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Taller de Inteligencia Artificial y Machine Learning</h6>
                                    <small class="{{ in_array(3, $registrosTalleres) ? 'text-primary' : 'text-success' }}">
                                        {{ in_array(3, $registrosTalleres) ? 'Registrado' : 'Disponible' }}
                                    </small>
                                </div>
                                <p class="mb-1">Explora conceptos de IA y ML con herramientas prácticas de programación.</p>
                                <small class="text-muted">Fecha: 17 de Noviembre, 2024 | Material: Python, Jupyter Notebook, librerías ML (scikit-learn, pandas, numpy)</small>
                            </a>
                            
                            <a href="{{ route('taller4') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Taller de Desarrollo Web con React y Node.js</h6>
                                    <small class="{{ in_array(4, $registrosTalleres) ? 'text-primary' : 'text-success' }}">
                                        {{ in_array(4, $registrosTalleres) ? 'Registrado' : 'Disponible' }}
                                    </small>
                                </div>
                                <p class="mb-1">Crea aplicaciones web modernas con React en el frontend y Node.js en el backend.</p>
                                <small class="text-muted">Fecha: 18 de Noviembre, 2024 | Material: Node.js, VS Code, navegador web, conocimientos HTML/CSS/JS</small>
                            </a>
                        </div>
                        
                        <div class="alert alert-warning mt-3" role="alert">
                            <strong>Importante:</strong> Puedes registrarte en todos los talleres que desees, pero solo una vez en cada uno. Una vez completado el registro en un taller, no podrás cambiarlo.
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection