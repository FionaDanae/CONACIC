<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - CONACIC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: #23b0d8;
            transition: width 0.3s ease;
        }
        .nav-link:hover {
            color: #23b0d8;
            transform: translateY(-2px);
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
<section class="bg-[#05225c] overflow-hidden {{ Route::currentRouteName() === 'inicio' ? 'pb-9' : 'pb-0' }} px-4 md:px-8">

    <header class="flex mx-auto justify-between items-center max-w-[1300px] py-4 relative z-50">
        <div class="flex items-center gap-3">
            <a href="{{ route('inicio') }}">
                <img src="/images/CONACIC.png" alt="CONACIC Logo" class="w-auto h-10 md:h-16 lg:h-24 object-contain">
            </a>
        </div>

        <button id="menu-btn" class="md:hidden inline-block focus:outline-none">
            <!-- Icono hamburguesa (abierto) -->
            <svg class="open-icon" width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="33" height="3.71429" rx="1.85714" fill="url(#paint0_linear_13_83)"></rect>
                <rect y="22.2857" width="33" height="3.71429" rx="1.85714" fill="url(#paint1_linear_13_83)"></rect>
                <rect x="9" y="11.1429" width="24" height="3.71429" rx="1.85714" fill="url(#paint2_linear_13_83)"></rect>
                <defs>
                    <linearGradient id="paint0_linear_13_83" x1="-8.62252e-09" y1="3.46667" x2="36.0395" y2="3.46666" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#23b0d8"></stop>
                        <stop offset="1" stop-color="#1669bc"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_13_83" x1="-3.90789" y1="26" x2="33" y2="26" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#23b0d8"></stop>
                        <stop offset="1" stop-color="#1669bc"></stop>
                    </linearGradient>
                    <linearGradient id="paint2_linear_13_83" x1="5.21062" y1="13" x2="33.0001" y2="13" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#23b0d8"></stop>
                        <stop offset="1" stop-color="#1669bc"></stop>
                    </linearGradient>
                </defs>
            </svg>
            <!-- Icono X (cerrado) -->
            <svg class="close-icon hidden" width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="6.36396" y="22.9497" width="33" height="3.71429" rx="1.85714" transform="rotate(-45 6.36396 22.9497)" fill="url(#paint0_linear_close)"></rect>
                <rect x="9.19238" y="0.636353" width="33" height="3.71429" rx="1.85714" transform="rotate(45 9.19238 0.636353)" fill="url(#paint1_linear_close)"></rect>
                <defs>
                    <linearGradient id="paint0_linear_close" x1="-8.62252e-09" y1="3.46667" x2="36.0395" y2="3.46666" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#23b0d8"></stop>
                        <stop offset="1" stop-color="#1669bc"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_close" x1="-3.90789" y1="26" x2="33" y2="26" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#23b0d8"></stop>
                        <stop offset="1" stop-color="#1669bc"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </button>

        <!-- Menú desktop -->
        <nav class="hidden md:flex flex-row gap-5 lg:gap-10">
            <ul class="flex flex-row gap-5 lg:gap-10">
                <li><a href="{{route('inicio')}}" class="nav-link uppercase font-bold text-xs text-white">INICIO</a></li>
                <li><a href="{{route('convocatoria')}}" class="nav-link uppercase font-bold text-xs text-white">CONVOCATORIA</a></li>
                <li><a href="{{route('programa')}}" class="nav-link uppercase font-bold text-xs text-white animate-neon-intense">PROGRAMA</a></li>
                @guest
                <li><a href="{{route('registro')}}" class="nav-link uppercase font-bold text-xs text-white">REGISTRO</a></li>
                <li><a href="{{route('acceso')}}" class="nav-link uppercase font-bold text-xs text-white">ACCESO</a></li>
                @else
                <li><span class="text-white text-xs font-bold">{{ Auth::user()->name }}</span></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="nav-link uppercase font-bold text-xs text-white hover:text-red-400">CERRAR SESIÓN</button>
                    </form>
                </li>
                @endguest
                <li><a href="{{route('libros')}}" class="nav-link uppercase font-bold text-xs text-white">LIBROS</a></li>
            </ul>
        </nav>
    </header>

    <!-- Menú móvil -->
    <nav id="main-menu" class="hidden md:hidden flex-col gap-3 w-full bg-[#05225c] p-4 z-[9999] shadow-lg border-t border-white/20">
        <ul class="flex flex-col gap-3 w-full">
            <li><a href="{{route('inicio')}}" class="nav-link uppercase font-bold text-xs text-white block py-2">INICIO</a></li>
            <li><a href="{{route('convocatoria')}}" class="nav-link uppercase font-bold text-xs text-white block py-2">CONVOCATORIA</a></li>
            <li><a href="{{route('programa')}}" class="nav-link uppercase font-bold text-xs text-white animate-neon-intense block py-2">PROGRAMA</a></li>
            @guest
            <li><a href="{{route('registro')}}" class="nav-link uppercase font-bold text-xs text-white block py-2">REGISTRO</a></li>
            <li><a href="{{route('acceso')}}" class="nav-link uppercase font-bold text-xs text-white block py-2">ACCESO</a></li>
            @else
            <li><span class="text-white text-xs font-bold block py-2">{{ Auth::user()->name }}</span></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="nav-link uppercase font-bold text-xs text-white hover:text-red-400 block py-2 w-full text-left">CERRAR SESIÓN</button>
                </form>
            </li>
            @endguest
            <li><a href="{{route('libros')}}" class="nav-link uppercase font-bold text-xs text-white block py-2">LIBROS</a></li>
        </ul>
    </nav>

    <!-- SECCIÓN INICIO -->
    @if(Route::currentRouteName() === 'inicio')
    <section class="relative flex flex-col-reverse md:flex-row mx-auto justify-between items-center gap-9 md:gap-4 max-w-[1300px] py-4 my-12">
        <svg width="736" height="423" class="absolute top-[50px] sm:top-[200px] sm:right-[-150px]" viewBox="0 0 736 423" fill="none">
            <path d="M738.5 4.5C491.667 -7.66666 -0.900015 58.9 3.49999 422.5" stroke="url(#paint0_linear_16_172)" stroke-width="6"></path>
            <defs>
                <linearGradient id="paint0_linear_16_172" x1="700.5" y1="-3.99998" x2="14.5" y2="361" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#05225c"></stop>
                    <stop offset="0.213542" stop-color="#23b0d8"></stop>
                    <stop offset="0.71875" stop-color="#1669bc"></stop>
                    <stop offset="1" stop-color="#05225c"></stop>
                </linearGradient>
            </defs>
        </svg>
        <div class="md:w-[520px] z-20">
            <h1 class="text-3xl md:text-[36px] lg:text-[46px] leading-[56px] text-white font-bold">
                <span class="text-[#FFC72C]">CONGRESO </span>INTERNACIONAL
                Y<span class="text-[#FFC72C]"> CONGRESO NACIONAL DE</span>
                CIENCIAS DE LA COMPUTACIÓN
            </h1>
            <p class="text-base text-white mt-4 md:mt-9 mb-10 md:mb-16">
                Será el escenario donde las y los profesionales de las Ciencias de la Computación intercambiarán puntos de vista sobre Inteligencia Artificial, Big Data, Internet de las Cosas - IoT, Robótica y la red 5G.
            </p>
        </div>
        <div class="p-4 z-20 bg-gradient-to-r from-black/30 via-black/20 to-black/30 backdrop-blur-sm rounded-[100px] md:rounded-bl-[250px] md:rounded-tr-[150px] border border-black/20 shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
            <img class="max-w-[490px] w-full object-contain" src="/images/CONACIC ROBOT.png" alt="CONACIC Robot">
        </div>
    </section>
    @endif

</section>

<main class="flex-1 relative overflow-hidden">
    @yield('contenido')
</main>

<footer class="bg-[#05225c] text-white p-10">
    <div class="max-w-[1300px] mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold">CONACIC 2025</h2>
            <p class="text-white mt-2">Innovando en las Ciencias de la Computación</p>
        </div>
        <nav class="grid grid-flow-col gap-8 mb-8 justify-center">
            <a href="{{route('inicio')}}" class="nav-link uppercase font-bold text-xs">Inicio</a>
            <a href="{{route('convocatoria')}}" class="nav-link uppercase font-bold text-xs">Convocatoria</a>
            <a href="{{route('programa')}}" class="nav-link uppercase font-bold text-xs text-white animate-neon-intense">Programa</a>
            <a href="{{route('registro')}}" class="nav-link uppercase font-bold text-xs">Registro</a>
        </nav>
        <nav class="mb-8">
            <div class="flex justify-center gap-8">
                <a href="https://x.com/i/flow/login?redirect_after_login=%2Fconacic" class="hover:text-[#23b0d8] transition-colors text-2xl">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://conacic.siycise.org/contributions#" class="hover:text-[#23b0d8] transition-colors text-2xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100068227071150" class="hover:text-[#23b0d8] transition-colors text-2xl">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/conacic_inter/" class="hover:text-[#23b0d8] transition-colors text-2xl">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </nav>
        <aside class="text-center text-sm opacity-80">
            <p>© {{date('Y')}} Congreso Nacional de Ciencias de la Computación - Todos los derechos reservados</p>
            <p class="mt-2 text-white">Desarrollado por Robótica Móvil FCC</p>
        </aside>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('🍔 Inicializando menú hamburguesa - Página:', window.location.pathname);
        
        // Esperar un poco para asegurar que el DOM esté completamente cargado
        setTimeout(function() {
            const menuBtn = document.getElementById('menu-btn');
            const mainMenu = document.getElementById('main-menu');

            console.log('🔍 Buscando elementos...');
            console.log('menuBtn encontrado:', !!menuBtn);
            console.log('mainMenu encontrado:', !!mainMenu);

            if (menuBtn && mainMenu) {
                console.log('✅ Elementos del menú encontrados correctamente');
                console.log('📱 Clases iniciales del menú:', mainMenu.className);
                
                // Event listener para el botón hamburguesa
                menuBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const isHidden = mainMenu.classList.contains('hidden');
                    const openIcon = menuBtn.querySelector('.open-icon');
                    const closeIcon = menuBtn.querySelector('.close-icon');
                    
                    if (isHidden) {
                        mainMenu.classList.remove('hidden');
                        mainMenu.classList.add('flex');
                        // Cambiar a icono X
                        if (openIcon && closeIcon) {
                            openIcon.classList.add('hidden');
                            closeIcon.classList.remove('hidden');
                        }
                        console.log('🟢 Menú ABIERTO');
                        console.log('📐 Posición del menú:', mainMenu.getBoundingClientRect());
                        console.log('👁️ Estilos computados:', window.getComputedStyle(mainMenu).display);
                    } else {
                        mainMenu.classList.add('hidden');
                        mainMenu.classList.remove('flex');
                        // Cambiar a icono hamburguesa
                        if (openIcon && closeIcon) {
                            openIcon.classList.remove('hidden');
                            closeIcon.classList.add('hidden');
                        }
                        console.log('🔴 Menú CERRADO');
                    }
                    
                    console.log('📋 Clases actuales:', mainMenu.className);
                    console.log('🎨 Color de fondo:', window.getComputedStyle(mainMenu).backgroundColor);
                });
                
                // Función para cerrar menú y restaurar icono
                function closeMenu() {
                    mainMenu.classList.add('hidden');
                    mainMenu.classList.remove('flex');
                    const openIcon = menuBtn.querySelector('.open-icon');
                    const closeIcon = menuBtn.querySelector('.close-icon');
                    if (openIcon && closeIcon) {
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                }
                
                // Cerrar menú al hacer click en enlaces
                const menuLinks = mainMenu.querySelectorAll('a');
                console.log('🔗 Enlaces encontrados:', menuLinks.length);
                
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        closeMenu();
                        console.log('🔗 Menú cerrado por click en enlace');
                    });
                });
                
                // Cerrar menú al hacer click fuera
                document.addEventListener('click', function(e) {
                    if (!menuBtn.contains(e.target) && !mainMenu.contains(e.target)) {
                        closeMenu();
                        console.log('🌐 Menú cerrado por click fuera');
                    }
                });
                
            } else {
                console.error('❌ ERROR: No se encontraron elementos del menú');
                console.log('menuBtn:', menuBtn);
                console.log('mainMenu:', mainMenu);
            }
        }, 100);
    });
</script>

</body>
</html>
