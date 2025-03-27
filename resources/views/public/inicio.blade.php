@extends('layouts.public')

@section('titulo', 'INICIO')

@section('contenido')
<section class="relative min-h-[600px] flex items-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/sparkle.jpg') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/60 to-[#0c3c82]/60"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-[#46c0e4]">CONACIC 2025</h1>
            <p class="text-xl md:text-2xl mb-8 text-white">El escenario donde la innovación en Ciencias Computacionales cobra vida.</p>
            <p class="text-lg md:text-xl mb-12 text-white">Únete a investigadores, docentes y profesionales en un ambiente de intercambio y análisis en torno a esta apasionante y estratégica área del conocimiento.</p>
            <a href="{{ route('galeria') }}" class="inline-block">
                <button class="bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-3 px-8 rounded-full text-lg hover:opacity-90 transition-opacity">
                    Descubre más
                </button>
            </a>
        </div>
    </div>
</section>
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-6">Comité Organizador</h2>
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="text-gray-700 leading-relaxed">La investigación acompañada del surgimiento de nuevas tecnologías provee propuestas que permiten enfrentar estos retos y resolver problemas actuales. La sociedad 5.0, en puerta, permitirá la creación de Ecosistemas mediante la integración de Inteligencia Artificial, Big Data e Internet de las Cosas.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Miembro 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="{{ asset('images/M. C. María del Carmen Santiago Díaz.jpg') }}" alt="Miembro 1" class="w-full h-64 object-cover object-top">
                </div>
                <div class="p-6 border-t-4 border-[#061d3f]">
                    <h3 class="text-xl font-semibold text-[#061d3f] mb-2">M. C. María del Carmen Santiago Díaz</h3>
                    <p class="text-gray-600 mb-2">Coordinadora</p>
                    <a href="marycarmen.santiago@correo.buap.mx" class="text-[#061d3f] hover:text-[#23b0d8] transition-colors duration-300">marycarmen.santiago@correo.buap.mx</a>
                </div>
            </div>

            <!-- Miembro 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="{{ asset('images/Dr. Gustavo Trinidad Rubín Linares.jpg') }}" alt="Miembro 2" class="w-full h-64 object-cover object-top">
                </div>
                <div class="p-6 border-t-4 border-[#061d3f]">
                    <h3 class="text-xl font-semibold text-[#061d3f] mb-2">Dr. Gustavo Trinidad Rubín Linares</h3>
                    <p class="text-gray-600 mb-2">Coordinador</p>
                    <a href="gustavo.rubin@correo.buap.mx" class="text-[#061d3f] hover:text-[#23b0d8] transition-colors duration-300">gustavo.rubin@correo.buap.mx</a>
                </div>
            </div>

            <!-- Miembro 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="{{ asset('images/Dr. Juan Humberto Sossa Azuela.jpg') }}" alt="Miembro 3" class="w-full h-64 object-cover object-top">
                </div>
                <div class="p-6 border-t-4 border-[#061d3f]">
                    <h3 class="text-xl font-semibold text-[#061d3f] mb-2">Dr. Juan Humberto Sossa Azuela</h3>
                    <p class="text-gray-600 mb-2">Coordinador</p>
                    <a href="humbertosossa@gmail.com" class="text-[#061d3f] hover:text-[#23b0d8] transition-colors duration-300">humbertosossa@gmail.com</a>
                </div>
            </div>

            <!-- Miembro 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="{{ asset('images/M. C. Ana Claudia Zenteno Vázquez.jpg') }}" alt="Miembro 4" class="w-full h-64 object-cover object-top">
                </div>
                <div class="p-6 border-t-4 border-[#061d3f]">
                    <h3 class="text-xl font-semibold text-[#061d3f] mb-2">M. C. Ana Claudia Zenteno Vázquez</h3>
                    <p class="text-gray-600 mb-2">Colaboradora</p>
                    <a href="ana.zenteno@correo.buap.mx" class="text-[#061d3f] hover:text-[#23b0d8] transition-colors duration-300">ana.zenteno@correo.buap.mx</a>
                </div>
            </div>

            <!-- Miembro 5 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="{{ asset('images/M. C. Judith Pérez Marcial.jpg') }}" alt="Miembro 5" class="w-full h-64 object-cover object-top">
                </div>
                <div class="p-6 border-t-4 border-[#061d3f]">
                    <h3 class="text-xl font-semibold text-[#061d3f] mb-2">M. C. Judith Pérez Marcial</h3>
                    <p class="text-gray-600 mb-2">Colaboradora</p>
                    <a href="judith.perez@correo.buap.mx" class="text-[#061d3f] hover:text-[#23b0d8] transition-colors duration-300">judith.perez@correo.buap.mx</a>
                </div>
            </div>

            <!-- Miembro 6 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="{{ asset('images/M. C. Alba Maribel Sánchez Gálvez.jpg') }}" alt="Miembro 6" class="w-full h-64 object-cover object-top">
                </div>
                <div class="p-6 border-t-4 border-[#061d3f]">
                    <h3 class="text-xl font-semibold text-[#061d3f] mb-2">M. C. Alba Maribel Sánchez Gálvez</h3>
                    <p class="text-gray-600 mb-2">Colaboradora</p>
                    <a href="alba.sanchez@correo.buap.mx" class="text-[#061d3f] hover:text-[#23b0d8] transition-colors duration-300">alba.sanchez@correo.buap.mx</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-6">Libros del Congreso</h2>
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="text-gray-700 leading-relaxed">Explora nuestras publicaciones académicas que recopilan las últimas investigaciones y avances en el campo de las Ciencias de la Computación.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Libro 1 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO%201%202024%20HORIZONTES_GRL_MCSD_GRL-%204.pdf" class="block relative transform transition-all duration-500 group-hover:-translate-y-2">
                    <div class="relative book-container">
                        <!-- Book Cover -->
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <!-- Front Cover -->
                            <div class="absolute inset-0 backface-hidden">
                                <img src="{{ asset('images/LIBRO 1.png') }}" alt="Libro 1" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <!-- Book Spine -->
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">CONACIC 2025</span>
                                </div>
                            </div>
                            <!-- Book Pages Edge -->
                            <div class="absolute right-0 top-0 bottom-0 w-2 bg-gray-100 transform skew-y-6"></div>
                            <!-- Book Bottom Edge -->
                            <div class="absolute bottom-0 left-0 right-0 h-2 bg-gray-100 transform skew-x-6"></div>
                        </div>
                        <!-- Book Shadow -->
                        <div class="absolute bottom-0 w-full h-4 bg-gradient-to-t from-black/20 to-transparent rounded-full blur-md transform transition-all duration-500 group-hover:translate-x-10 group-hover:translate-y-2"></div>
                    </div>
                </a>
            </div>

            <!-- Libro 2 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO%202%202024%20Avances%20en%20Computacio%CC%81n-%20%20%20Perspectivas%20Acade%CC%81micas%20y%20de%20Investigacio%CC%81n%20en%20Inteligencia%20Artificial,%20Ciencia%20de%20Datos%20y%20Seguridad_2.pdf" class="block relative transform transition-all duration-500 group-hover:-translate-y-2">
                    <div class="relative book-container">
                        <!-- Book Cover -->
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <!-- Front Cover -->
                            <div class="absolute inset-0 backface-hidden">
                                <img src="{{ asset('images/LIBRO 2.png') }}" alt="Libro 2" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <!-- Book Spine -->
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">CONACIC 2025</span>
                                </div>
                            </div>
                            <!-- Book Pages Edge -->
                            <div class="absolute right-0 top-0 bottom-0 w-2 bg-gray-100 transform skew-y-6"></div>
                            <!-- Book Bottom Edge -->
                            <div class="absolute bottom-0 left-0 right-0 h-2 bg-gray-100 transform skew-x-6"></div>
                        </div>
                        <!-- Book Shadow -->
                        <div class="absolute bottom-0 w-full h-4 bg-gradient-to-t from-black/20 to-transparent rounded-full blur-md transform transition-all duration-500 group-hover:translate-x-10 group-hover:translate-y-2"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="relative py-24">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/WORKSHOP.webp') }}" alt="Workshop Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 text-[#FFC72C]">9°. WORKSHOP DE PROYECTOS DE INVESTIGACIÓN JUNIOR</h2>
            <a href="https://siycise.org/workshop/" class="inline-block">
                <button class="bg-gradient-to-r from-[#FFC72C] to-[#FFD700] text-[#061d3f] font-bold py-4 px-10 rounded-full text-xl hover:from-[#FFD700] hover:to-[#FFC72C] transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Únete ahora
                </button>
            </a>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-6">Plantillas para Presentaciones</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Ponencias Simultáneas -->
            <div class="bg-white rounded-lg shadow-lg p-6 transform hover:-translate-y-1 transition-all duration-300 flex flex-col items-center justify-center text-center">
                <div class="text-[#061d3f] text-4xl mb-4 flex justify-center">
                    <i class="fas fa-users-rectangle"></i>
                </div>
                <h3 class="text-xl font-semibold text-[#061d3f] mb-3 text-center">Ponencias Simultáneas</h3>
                <p class="text-gray-600 mb-6 text-center">Plantilla para presentaciones en sesiones paralelas</p>
                <div class="flex justify-center">
                    <a href="https://conacic.siycise.org/docs/CONACIC2024_PLANTILLA_PARA_PONENCIAS_SIMULTANEAS.pptx" class="inline-block bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-2 px-6 rounded-full hover:opacity-90 transition-opacity">
                        Descargar
                    </a>
                </div>
            </div>

            <!-- Conferencistas -->
            <div class="bg-white rounded-lg shadow-lg p-6 transform hover:-translate-y-1 transition-all duration-300 flex flex-col items-center justify-center text-center">
                <div class="text-[#061d3f] text-4xl mb-4 flex justify-center">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="text-xl font-semibold text-[#061d3f] mb-3 text-center">Conferencistas</h3>
                <p class="text-gray-600 mb-6 text-center">Plantilla para conferencias magistrales</p>
                <div class="flex justify-center">
                    <a href="https://conacic.siycise.org/docs/CONACIC2024_PLANTILLA_PARA_CONFERENCISTA.pptx" class="inline-block bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-2 px-6 rounded-full hover:opacity-90 transition-opacity">
                        Descargar
                    </a>
                </div>
            </div>

            <!-- Talleristas -->
            <div class="bg-white rounded-lg shadow-lg p-6 transform hover:-translate-y-1 transition-all duration-300 flex flex-col items-center justify-center text-center">
                <div class="text-[#061d3f] text-4xl mb-4 flex justify-center">
                    <i class="fas fa-person-chalkboard"></i>
                </div>
                <h3 class="text-xl font-semibold text-[#061d3f] mb-3 text-center">Talleristas</h3>
                <p class="text-gray-600 mb-6 text-center">Plantilla para talleres y sesiones prácticas</p>
                <div class="flex justify-center">
                    <a href="https://conacic.siycise.org/docs/CONACIC2024_PLANTILLA_PARA_TALLERISTAS.pptx" class="inline-block bg-gradient-to-r from-[#1669bc] to-[#23b0d8] text-white font-bold py-2 px-6 rounded-full hover:opacity-90 transition-opacity">
                        Descargar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-12">Instituciones Participantes</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-8 max-w-6xl mx-auto">
            <!-- SMCC Logo -->
            <a href="https://computo.fismat.umich.mx/smcc/" class="transform hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <img src="{{ asset('images/SMCC.png') }}" alt="SMCC Logo" class="max-h-24 w-auto object-contain">
            </a>
            
            <!-- SMIA Logo -->
            <a href="https://smia.mx/" class="transform hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <img src="{{ asset('images/SMIA.png') }}" alt="SMIA Logo" class="max-h-24 w-auto object-contain">
            </a>
            
            <!-- IPN Logo -->
            <a href="https://www.ipn.mx/" class="transform hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <img src="{{ asset('images/IPN.png') }}" alt="IPN Logo" class="max-h-24 w-auto object-contain">
            </a>
            
            <!-- IEEE Logo -->
            <a href="https://ieee-puebla.org/" class="transform hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <img src="{{ asset('images/IEEE.png') }}" alt="IEEE Logo" class="max-h-24 w-auto object-contain">
            </a>
            
            <!-- FCC Logo -->
            <a href="https://www.cs.buap.mx/" class="transform hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <img src="{{ asset('images/FCC.png') }}" alt="FCC Logo" class="max-h-24 w-auto object-contain">
            </a>

            <!--  Logo -->
            <a href="https://www.cic.ipn.mx/" class="transform hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <img src="{{ asset('images/CIC.png') }}" alt="UG Logo" class="max-h-24 w-auto object-contain">
            </a>
        </div>
    </div>
</section>

@endsection