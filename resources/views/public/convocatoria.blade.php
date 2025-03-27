@extends('layouts.public')

@section('titulo', 'CONVOCATORIA')

@section('contenido')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-[#061d3f] mb-8 text-center">Convocatoria</h1>
        
        <!-- Announcement Box -->
        <div class="bg-[#ccf4fc] rounded-lg shadow-lg p-8 mb-12 border-l-4 border-[#23b0d8]">
            <div class="flex items-start text-[#061d3f]">
                <i class="material-icons text-3xl mr-4">info</i>
                <p class="text-gray-700 leading-relaxed">
                    El Comité Organizador del VI Congreso Internacional y XIV Congreso Nacional de Ciencias de la Computación, CONACIC 2024, invita a la comunidad científica y académica a participar.
                </p>
            </div>
        </div>

        <!-- Publications Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex items-center mb-6 text-[#061d3f]">
                <i class="fas fa-book-open text-3xl mr-4"></i>
                <h3 class="text-2xl font-bold">Publicación</h3>
            </div>
            <ul class="space-y-4 text-gray-700">
                <li class="flex items-start">
                    <i class="fas fa-file-alt mt-1 mr-3 text-[#23b0d8]"></i>
                    <a href="https://easychair.org/cfp/CONACIC2024" class="hover:text-[#23b0d8] transition-colors">Llamado a artículos</a>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-book mt-1 mr-3 text-[#23b0d8]"></i>
                    <span>Capítulos de libro con ISBN</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-newspaper mt-1 mr-3 text-[#23b0d8]"></i>
                    <a href="https://intranet.matematicas.uady.mx/journal/" class="hover:text-[#23b0d8] transition-colors">Artículos en la revista "Abstraction and Application" (ISSN 2007-2635)</a>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-journal-whills mt-1 mr-3 text-[#23b0d8]"></i>
                    <div class="flex flex-wrap items-center">
                        <span>Posibilidad de publicación extendida en las revistas JCR </span>
                        <a href="https://www.ijcopi.org/ojs/indexing" class="hover:text-[#23b0d8] transition-colors mx-1">International Journal Of Combinatorial Optimization Problems And Informatics</a>
                        <span class="mx-1">ó</span>
                        <a href="https://cys.cic.ipn.mx/ojs/index.php/CyS" class="hover:text-[#23b0d8] transition-colors">Computación y Sistemas</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Important Dates Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex items-center mb-6 text-[#061d3f]">
                <i class="fas fa-calendar-alt text-3xl mr-4"></i>
                <h3 class="text-2xl font-bold">Fechas Importantes</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Evento</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">Lanzamiento de convocatoria</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold text-[#2E8B57]">20 de abril</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">Deadline</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold text-[#2E8B57]">5 de agosto</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">Notificación de aceptación o rechazo</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold text-[#2E8B57]">11 de septiembre</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">Entrega versión final</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold text-[#2E8B57]">18 de septiembre</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Topics Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex items-center mb-6 text-[#061d3f]">
                <i class="fas fa-lightbulb text-3xl mr-4"></i>
                <h3 class="text-2xl font-bold">Temas de Interés</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-database text-[#23b0d8]"></i>
                    <span class="text-gray-700">Big Data</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-cloud text-[#23b0d8]"></i>
                    <span class="text-gray-700">Cloud Computing</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-users text-[#23b0d8]"></i>
                    <span class="text-gray-700">Computación y Sociedad</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-calculator text-[#23b0d8]"></i>
                    <span class="text-gray-700">Cómputo Científico</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-chalkboard-teacher text-[#23b0d8]"></i>
                    <span class="text-gray-700">TIC's en la Educación</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-shield-alt text-[#23b0d8]"></i>
                    <span class="text-gray-700">CyberSeguridad</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-code text-[#23b0d8]"></i>
                    <span class="text-gray-700">Ingeniería de Software</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-brain text-[#23b0d8]"></i>
                    <span class="text-gray-700">Inteligencia Artificial</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-network-wired text-[#23b0d8]"></i>
                    <span class="text-gray-700">IoT</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-robot text-[#23b0d8]"></i>
                    <span class="text-gray-700">Robótica</span>
                </div>
            </div>
        </div>

        <!-- Submission Guidelines Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex items-center mb-6 text-[#061d3f]">
                <i class="fas fa-paper-plane text-3xl mr-4"></i>
                <h3 class="text-2xl font-bold">Envío de Trabajos</h3>
            </div>
            <ul class="space-y-4 text-gray-700">
                <li class="flex items-start">
                    <i class="fas fa-file-alt mt-1 mr-3 text-[#23b0d8]"></i>
                    <span>Longitud máxima: 10 hojas</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-language mt-1 mr-3 text-[#23b0d8]"></i>
                    <span>Idioma: Inglés o Español</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-file-download mt-1 mr-3 text-[#23b0d8]"></i>
                    <span>Formato: <a href="https://conacic.siycise.org/docs/Plantilla_A&A.docx" class="hover:text-[#23b0d8] transition-colors">PLANTILLA</a></span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-cloud-upload-alt mt-1 mr-3 text-[#23b0d8]"></i>
                    <span>Plataforma de envío: <a href="https://easychair.org/conferences/?conf=conacic2024" class="hover:text-[#23b0d8] transition-colors">Easychair</a></span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-exclamation-circle mt-1 mr-3 text-[#23b0d8]"></i>
                    <span>Importante: Enviar el archivo sin autores y registrar la información completa de todos los autores en Easychair</span>
                </li>
            </ul>
        </div>

        <!-- Cost Section -->
        <div class="bg-[#d4e4dc] rounded-lg shadow-lg p-8">
            <div class="flex items-center mb-6 text-[#061d3f]">
                <i class="fas fa-dollar-sign text-3xl mr-4"></i>
                <h3 class="text-2xl font-bold">Costo</h3>
            </div>
            <div class="flex items-start text-[#061d3f]">
                <i class="material-icons text-3xl mr-4">info</i>
                <p class="text-gray-700">
                    Evento gratuito, excepto la publicación como capítulo de cada libro.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection