@extends('layouts.public')

@section('titulo', 'LIBROS')

@section('contenido')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-[#061d3f] mb-8 text-center">Biblioteca CONACIC</h1>
        
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="text-gray-700 leading-relaxed">Durante 13 años, CONACIC ha sido testigo de grandes investigaciones y proyectos que impulsan el avance tecnológico. Explora nuestra colección de libros que documentan estas ideas innovadoras.</p>
        </div>

        <!-- Grid de Libros -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto mb-16">
            <!-- Libro 1 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO%201%202024%20HORIZONTES_GRL_MCSD_GRL-%204.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                                <img src="{{ asset('images/LIBRO 1.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Horizontes en Computación</h3>
                            <p class="text-sm text-gray-600">Edición 2024</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 2 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO%202%202024%20Avances%20en%20Computacio%CC%81n-%20%20%20Perspectivas%20Acade%CC%81micas%20y%20de%20Investigacio%CC%81n%20en%20Inteligencia%20Artificial,%20Ciencia%20de%20Datos%20y%20Seguridad_2.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                                <img src="{{ asset('images/LIBRO 2.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Avances en Computación</h3>
                            <p class="text-sm text-gray-600">Edición 2024</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 3 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO1_CONACIC2023_INNOVACIONES.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                            <img src="{{ asset('images/LIBRO 3.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Innovaciones en Sistemas Inteligentes</h3>
                            <p class="text-sm text-gray-600">Edición 2023</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 4 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO2_CONACIC2023_TENDENCIAS.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                            <img src="{{ asset('images/LIBRO 4.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Tendencias en Sistemas Inteligentes</h3>
                            <p class="text-sm text-gray-600">Edición 2023</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 5 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO_APLICACIONES%20DE%20LAS%20CIENCIAS%20COMPUTACIONALES%20EN%20SISTEMAS%20INTELIGENTES%20Y%20CIBERSEGURIDAD.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                            <img src="{{ asset('images/LIBRO 5.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Aplicaciones de las Ciencias Computacionales</h3>
                            <p class="text-sm text-gray-600">Edición 2022</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 6 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO_APORTACIONES%20DE%20LAS%20CIENCIAS%20COMPUTACIONALES%20EN%20SISTEMAS%20INTELIGENTES%20Y%20CIBERSEGURIDAD.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                            <img src="{{ asset('images/LIBRO 6.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Aportaciones de las Ciencias Computacionales</h3>
                            <p class="text-sm text-gray-600">Edición 2022</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 7 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO_CONACIC_2021_APORTACIONES.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                            <img src="{{ asset('images/LIBRO 7.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Aportaciones durante COVID19</h3>
                            <p class="text-sm text-gray-600">Edición 2021</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Libro 8 -->
            <div class="group">
                <a href="https://conacic.siycise.org/docs/LIBRO_CONACIC_2021_APLICACIONES.pdf" target="_blank" class="block">
                    <div class="relative book-container">
                        <div class="book relative w-full aspect-[3/4] bg-white rounded-lg shadow-2xl transform transition-transform duration-500 group-hover:rotate-y-[30deg] origin-left preserve-3d">
                            <div class="absolute inset-0 backface-hidden">
                            <img src="{{ asset('images/LIBRO 8.png') }}" class="w-full h-full object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#05225c]/10 to-[#0c3c82]/10 group-hover:opacity-30 transition-opacity rounded-lg"></div>
                            </div>
                            <div class="absolute left-0 top-0 w-8 h-full origin-left -translate-x-8 rotate-y-90 bg-[#061d3f] rounded-sm transform-preserve-3d shadow-inner">
                                <div class="w-full h-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold writing-mode-vertical-rl rotate-180">2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-lg font-semibold text-[#061d3f]">Aplicaciones durante COVID19</h3>
                            <p class="text-sm text-gray-600">Edición 2021</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <!-- Tabla de Ediciones Anteriores -->
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center">
                <table class="w-full max-w-[600px] bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-[#061d3f] text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-lg font-semibold">Ediciones anteriores</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <a href="https://conacic.siycise.org/docs/CONACIC-2020-Libro-1.pdf" target="_blank" class="text-[#061d3f] hover:text-[#14d8c4] transition-colors">
                                    Aplicaciones científicas y tecnológicas de las ciencias computacionales (2020)
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <a href="https://conacic.siycise.org/docs/CONACIC-2020-Libro-2.pdf" target="_blank" class="text-[#061d3f] hover:text-[#14d8c4] transition-colors">
                                    Desarrollos científicos y tecnológicos en las ciencias computacionales (2020)
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('togglePrevious');
        const previousEditions = document.getElementById('previousEditions');
        const icon = toggleButton.querySelector('i');

        toggleButton.addEventListener('click', function() {
            previousEditions.classList.toggle('hidden');
            icon.style.transform = previousEditions.classList.contains('hidden') ? '' : 'rotate(180deg)';
        });
    });
</script>
@endpush

@endsection
