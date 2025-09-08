<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CONACIC') }} - @yield('title', 'Panel de Usuario')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
            transform: translateY(-1px);
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
        
        .dropdown-menu {
            border-radius: 0.5rem;
            margin-top: 0.5rem;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
            transition: all 0.3s ease;
        }
        
        .navbar-brand:hover {
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
        
        /* Estilos para pantallas grandes (desktop) */
        @media (min-width: 992px) {
            .navbar-collapse {
                display: flex !important;
                visibility: visible !important;
            }
            
            .navbar-nav {
                display: flex !important;
                flex-direction: row !important;
            }
            
            .navbar-toggler {
                display: none !important;
            }
            
            .nav-item {
                display: block !important;
            }
            
            .nav-link {
                display: block !important;
            }
        }
        
        /* Estilos para pantallas pequeñas (móvil) */
        @media (max-width: 991.98px) {
            .navbar-nav .nav-link {
                padding: 0.75rem 1rem;
                margin: 0.25rem 0;
                border-radius: 0.5rem;
                background-color: rgba(255, 255, 255, 0.1);
            }
            
            .navbar-collapse {
                margin-top: 1rem;
                padding-top: 1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
                background-color: rgba(0, 0, 0, 0.1);
                border-radius: 0.5rem;
                padding: 1rem;
            }
            
            .navbar-toggler {
                border: 2px solid rgba(255, 255, 255, 0.3);
                padding: 0.5rem;
                display: block !important;
            }
            
            .navbar-toggler:hover {
                background-color: rgba(255, 255, 255, 0.1);
            }
        }
        
        .user-avatar {
            transition: all 0.3s ease;
        }
        
        .user-avatar:hover {
            background-color: rgba(255, 255, 255, 0.3) !important;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg align-items-center" style="background: linear-gradient(135deg, #05225c 0%, #1669bc 50%, #23b0d8 100%);">
        <div class="container">
            <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="{{ route('user.inicio') }}">
                <img src="{{ asset('images/CONACIC.png') }}" alt="CONACIC" class="me-2 img-fluid" style="height:50px;">
            </a>
            
            <button class="navbar-toggler border-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white fs-5"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 py-2 rounded-3 mx-1 transition-all" href="{{ route('user.inicio') }}" style="transition: all 0.3s ease;">
                            <i class="fas fa-home me-1"></i> 
                            <span class="fw-semibold">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white px-3 py-2 rounded-3 mx-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="transition: all 0.3s ease;">
                            <i class="fas fa-chalkboard-teacher me-1"></i> 
                            <span class="fw-semibold">Talleres</span>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg">
                            <li><a class="dropdown-item py-2" href="{{ route('taller1') }}"><i class="fas fa-shield-alt me-2 text-primary"></i> Ciberseguridad</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('taller2') }}"><i class="fas fa-mobile-alt me-2 text-success"></i> Flutter</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('taller3') }}"><i class="fas fa-brain me-2 text-warning"></i> IA y Machine Learning</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('taller4') }}"><i class="fas fa-code me-2 text-info"></i> React y Node.js</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 py-2 rounded-3 mx-1" href="{{ route('user.programa') }}" style="transition: all 0.3s ease;">
                            <i class="fas fa-calendar me-1"></i> 
                            <span class="fw-semibold">Programa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 py-2 rounded-3 mx-1" href="{{ route('user.libros') }}" style="transition: all 0.3s ease;">
                            <i class="fas fa-book me-1"></i> 
                            <span class="fw-semibold">Libros</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white px-3 py-2 rounded-3 d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="transition: all 0.3s ease;">
                            <div class="bg-white bg-opacity-20 rounded-circle p-2 me-2 user-avatar d-flex justify-content-center align-items-center" style="width:36px; height:36px;">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <span class="fw-semibold d-none d-md-inline">{{ Auth::user()->name }}</span>
                            <span class="fw-semibold d-md-none">Usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg">
                            <li class="px-3 py-2 border-bottom">
                                <small class="text-muted">Conectado como:</small><br>
                                <strong>{{ Auth::user()->name }}</strong>
                            </li>
                            <li><a class="dropdown-item py-2" href="{{ route('user.perfil') }}"><i class="fas fa-user-edit me-2 text-primary"></i> Mi Perfil</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('user.inicio') }}"><i class="fas fa-tachometer-alt me-2 text-success"></i> Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger py-2">
                                        <i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        <!-- Success Messages -->
        @if(session('success'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        <!-- Error Messages -->
        @if(session('error'))
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        <!-- Validation Errors -->
        @if($errors->any())
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Por favor, corrija los siguientes errores:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-auto py-4" style="background: linear-gradient(135deg, #05225c 0%, #1669bc 50%, #23b0d8 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-white mb-0">&copy; {{ date('Y') }} CONACIC. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-white mb-0">Congreso Nacional de Ciencias de la Computación</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Mejorar la experiencia del menú responsivo
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidad para navbar en app.blade.php
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            
            if (navbarToggler && navbarCollapse) {
                const toggleIcon = navbarToggler.querySelector('i');
                
                navbarToggler.addEventListener('click', function() {
                    setTimeout(() => {
                        if (navbarCollapse.classList.contains('show')) {
                            if (toggleIcon) {
                                toggleIcon.classList.remove('fa-bars');
                                toggleIcon.classList.add('fa-times');
                            }
                        } else {
                            if (toggleIcon) {
                                toggleIcon.classList.remove('fa-times');
                                toggleIcon.classList.add('fa-bars');
                            }
                        }
                    }, 100);
                });
                
                // Cerrar menú al hacer clic en un enlace (en móvil)
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        if (window.innerWidth < 992 && typeof bootstrap !== 'undefined') {
                            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                                hide: true
                            });
                            
                            // Restaurar el icono del botón hamburguesa
                            if (toggleIcon) {
                                toggleIcon.classList.remove('fa-times');
                                toggleIcon.classList.add('fa-bars');
                            }
                        }
                    });
                });
            }
            
            // Soporte para menú móvil en welcome.blade.php
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    
                    // Cambiar icono del botón
                    const icons = mobileMenuButton.querySelectorAll('svg');
                    if (icons && icons.length >= 2) {
                        icons.forEach(icon => {
                            icon.classList.toggle('hidden');
                        });
                    }
                });
            }
            
            // Soporte para menú hamburguesa en layout público
            const menuBtn = document.getElementById('menu-btn');
            const mainMenu = document.getElementById('main-menu');
            
            if (menuBtn && mainMenu) {
                menuBtn.addEventListener('click', () => {
                    mainMenu.classList.toggle('hidden');
                    
                    // Cambiar icono del botón hamburguesa si existe
                    const openIcon = menuBtn.querySelector('.open-icon');
                    const closeIcon = menuBtn.querySelector('.close-icon');
                    
                    if (openIcon && closeIcon) {
                        openIcon.classList.toggle('hidden');
                        closeIcon.classList.toggle('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>