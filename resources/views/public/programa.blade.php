@extends('layouts.public')

@section('titulo', 'PROGRAMA')

@section('contenido')
<style>
    .tab-content.hidden {
        display: none;
    }
    .tab-content:not(.hidden) {
        display: block;
    }
</style>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-[#061d3f] mb-8 text-center">Programa CONACIC 2025</h1>

        <!-- Tabs Navigation -->
        <div class="flex justify-center mb-8">
            <div class="inline-flex bg-white rounded-lg shadow-md overflow-hidden">
                <button id="tab-general" class="tab-btn px-6 py-3 font-semibold text-[#061d3f] bg-white border-b-2 border-[#23b0d8]" onclick="openTab('general')">Programa General</button>
                <button id="tab-conferencias" class="tab-btn px-6 py-3 font-semibold text-gray-500 hover:text-[#061d3f]" onclick="openTab('conferencias')">Conferencias</button>
                <button id="tab-talleres" class="tab-btn px-6 py-3 font-semibold text-gray-500 hover:text-[#061d3f]" onclick="openTab('talleres')">Talleres</button>
            </div>
        </div>

        <!-- Tab Content -->
        <!-- Tab Content General -->
        <div id="tab-content-general" class="tab-content">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold text-[#061d3f] mb-6">Programa General CONACIC 2025</h2>
                <p class="text-gray-600 mb-6">A continuación se presenta el programa completo del congreso, incluyendo conferencias y talleres.</p>
                
                <div class="flex justify-center mb-8">
                    <div class="inline-flex bg-gray-100 rounded-lg shadow-md overflow-hidden flex-wrap">
                        <button id="subtab-lunes6" class="subtab-btn px-4 py-2 font-semibold text-gray-500 hover:text-[#061d3f] text-sm" onclick="openSubTab('lunes6')">Lunes 6</button>
                        <button id="subtab-martes7" class="subtab-btn px-4 py-2 font-semibold text-gray-500 hover:text-[#061d3f] text-sm" onclick="openSubTab('martes7')">Martes 7</button>
                        <button id="subtab-miercoles8" class="subtab-btn px-4 py-2 font-semibold text-gray-500 hover:text-[#061d3f] text-sm" onclick="openSubTab('miercoles8')">Miércoles 8</button>
                        <button id="subtab-jueves9" class="subtab-btn px-4 py-2 font-semibold text-gray-500 hover:text-[#061d3f] text-sm" onclick="openSubTab('jueves9')">Jueves 9</button>
                        <button id="subtab-viernes10" class="subtab-btn px-4 py-2 font-semibold text-gray-500 hover:text-[#061d3f] text-sm" onclick="openSubTab('viernes10')">Viernes 10</button>
                    </div>
                </div>

                <!-- Contenido de sub-pestañas -->
                <!-- Lunes 6 -->
                <div id="subtab-content-lunes6" class="subtab-content">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 shadow-lg border-l-4 border-[#23b0d8]">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-[#061d3f] text-white px-6 py-3 rounded-full font-bold text-lg shadow-md">
                            📅 Lunes 6 de Octubre
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-bold text-sm">⏰ 16:00 - 19:00</span>
                                <span class="bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full text-sm font-semibold">Ponencias On Demand</span>
                            </div>
                            <h4 class="font-bold text-[#061d3f] text-xl mb-3">Ponencias On Demand CONACIC 2024</h4>
                            <p class="text-gray-700 mb-4 leading-relaxed">¡Bienvenidos al Congreso Nacional de Ciencias de la Computación 2024! Accede a las ponencias disponibles bajo demanda.</p>
                            <div class="flex justify-center">
                                <a href="https://conacic.siycise.org/simultaneas/" class="bg-gradient-to-r from-[#23b0d8] to-[#1a8bb0] text-white px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                    🎥 Ingresar a las Ponencias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-8"></div>
                
                <!-- Talleres Simultáneos -->
                        <div class="bg-gradient-to-r from-[#061d3f] to-[#23b0d8] p-6 rounded-lg">
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl bg-[#FFC72C] text-[#061d3f] px-6 py-2 rounded-full">16:00 - 19:00</span>
                            </div>
                            <h3 class="text-white text-center text-2xl font-bold mb-6">TALLERES SIMULTÁNEOS</h3>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Sala 1 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#FFC72C]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 1
                                        </div>
                                        <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">M.C. Saulo Abraham Gante Díaz</h4>
                                            <p class="text-gray-600 text-sm">CIC-IPN México</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h5 class="font-bold text-[#061d3f] mb-2">Renconstrucción 3D</h5>
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Sala 2 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#FFC72C]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 2
                                        </div>
                                        <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">M.C. Griselda Cortés Barrera</h4>
                                            <h6 class="font-semibold text-[#061d3f] text-sm">M.C. Edgar Corona Organiche</h6>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h5 class="font-bold text-[#061d3f] mb-2">Adquisición y preprocesamiento de señales EEG</h5>
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Martes 7 -->
                <div id="subtab-content-martes7" class="subtab-content hidden">
                    <div class="space-y-6">
                        <!-- Ponencias On Demand -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 shadow-lg border-l-4 border-[#23b0d8]">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-[#061d3f] text-white px-6 py-3 rounded-full font-bold text-lg shadow-md">
                            📅 Martes 7 de Octubre
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-bold text-sm">⏰ 16:00 - 19:00</span>
                                <span class="bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full text-sm font-semibold">Ponencias On Demand</span>
                            </div>
                            <h4 class="font-bold text-[#061d3f] text-xl mb-3">Ponencias On Demand CONACIC 2024</h4>
                            <p class="text-gray-700 mb-4 leading-relaxed">¡Bienvenidos al Congreso Nacional de Ciencias de la Computación 2024! Accede a las ponencias disponibles bajo demanda.</p>
                            <div class="flex justify-center">
                                <a href="https://conacic.siycise.org/simultaneas/" class="bg-gradient-to-r from-[#23b0d8] to-[#1a8bb0] text-white px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                    🎥 Ingresar a las Ponencias
                                </a>
                            </div>
                        </div>
                    </div>
                        </div>
                        
                        <div class="mb-8"></div>

                        <!-- Talleres Simultáneos -->
                        <div class="bg-gradient-to-r from-[#061d3f] to-[#23b0d8] p-6 rounded-lg">
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl bg-[#FFC72C] text-[#061d3f] px-6 py-2 rounded-full">16:00 - 19:00</span>
                            </div>
                            <h3 class="text-white text-center text-2xl font-bold mb-6">TALLERES SIMULTÁNEOS</h3>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Sala 1 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#23b0d8]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 1
                                        </div>
                                        <span class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full font-semibold">Project Manager</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="Lic. José Soto Pérez" class="w-16 h-16 rounded-full object-cover border-3 border-[#061d3f] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">Lic. José Soto Pérez</h4>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Sala 2 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#FFC72C]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 2
                                        </div>
                                        <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">M.C. Griselda Cortés Barrera</h4>
                                            <h6 class="font-semibold text-[#061d3f] text-sm">M.C. Edgar Corona Organiche</h6>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h5 class="font-bold text-[#061d3f] mb-2">Adquisición y preprocesamiento de señales EEG</h5>
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Miércoles 8 -->
                <div id="subtab-content-miercoles8" class="subtab-content hidden">
                    <div class="space-y-6">
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-8 shadow-lg border-l-4 border-[#23b0d8]">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-[#061d3f] text-white px-6 py-3 rounded-full font-bold text-lg shadow-md">
                            📅 Miércoles 8 de Octubre
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto space-y-6">
                        <!-- Inauguración -->
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-[#FFC72C]">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-bold text-sm">⏰ 09:30 - 10:00</span>
                                <span class="bg-[#23b0d8] text-white px-3 py-1 rounded-full text-sm font-semibold">🎉 Inauguración</span>
                            </div>
                            <h4 class="font-bold text-[#061d3f] text-xl mb-3">Inauguración del Congreso CONACIC 2024</h4>
                            <p class="text-gray-700 mb-4 leading-relaxed">¡Bienvenidos al Congreso Nacional de Ciencias de la Computación 2024! Únete a la ceremonia inaugural de este importante evento académico.</p>
                            <div class="flex justify-center">
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-gradient-to-r from-[#FFC72C] to-[#FFD700] text-[#061d3f] px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                    🎊 Ingresar a la Inauguración
                                </a>
                            </div>
                        </div>

                        <!-- Dr. Erik Rodner -->
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-[#23b0d8]">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-bold text-sm">⏰ 10:00 - 11:00</span>
                                <span class="bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full text-sm font-semibold">🎓 Conferencia Magistral</span>
                            </div>
                            
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex items-center gap-4 md:w-1/3">
                                    <img src="{{ asset('images/Dr.ErikRodnerRodner.jpg') }}" alt="Dr. Erik Rodner" class="w-20 h-20 rounded-full object-cover border-4 border-[#23b0d8] shadow-lg">
                                    <div>
                                        <h4 class="font-bold text-[#061d3f] text-lg">Dr. Erik Rodner Rodner</h4>
                                        <p class="text-gray-600 text-sm">University of Applied Sciences, Berlin</p>
                                        <button onclick="document.getElementById('modal-erik').classList.remove('hidden')" class="mt-2 bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-lg hover:bg-[#FFD700] transition-colors text-sm font-semibold shadow-md">
                                            👤 Ver perfil
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="md:w-2/3">
                                    <h5 class="font-bold text-[#061d3f] text-xl mb-3 border-b-2 border-[#23b0d8] pb-2">Advances in Machine Learning - Challenges and Opportunities ahead</h5>
                                    <p class="text-gray-700 text-sm leading-relaxed mb-4">Machine learning has become an everyday technology we are surrounded with. Furthermore, the speed of innovation has increased dramatically, presenting a vast number of opportunities but also critical challenges. In my talk, I will give an overview of current advances, discuss the future ahead of us (at least a prediction for the next few weeks), and link some of the challenges to research done in my lab.</p>
                                    <div class="flex justify-center">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-gradient-to-r from-[#23b0d8] to-[#1a8bb0] text-white px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                            🎯 Ingresar a la Conferencia
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8"></div>

                        <!-- Talleres Simultáneos -->
                        <div class="bg-gradient-to-r from-[#061d3f] to-[#23b0d8] p-6 rounded-lg">
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl bg-[#FFC72C] text-[#061d3f] px-6 py-2 rounded-full">16:00 - 19:00</span>
                            </div>
                            <h3 class="text-white text-center text-2xl font-bold mb-6">TALLERES SIMULTÁNEOS</h3>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Sala 1 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#23b0d8]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 1
                                        </div>
                                        <span class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full font-semibold">Project Manager</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="Lic. José Soto Pérez" class="w-16 h-16 rounded-full object-cover border-3 border-[#061d3f] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">Lic. José Soto Pérez</h4>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Sala 2 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#FFC72C]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 2
                                        </div>
                                        <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">M.C. Griselda Cortés Barrera</h4>
                                            <h6 class="font-semibold text-[#061d3f] text-sm">M.C. Edgar Corona Organiche</h6>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h5 class="font-bold text-[#061d3f] mb-2">Adquisición y preprocesamiento de señales EEG</h5>
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>

                <!-- Jueves 9 -->
                <div id="subtab-content-jueves9" class="subtab-content hidden">
                    <div class="space-y-6">
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-8 shadow-lg border-l-4 border-[#FFC72C]">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-[#061d3f] text-white px-6 py-3 rounded-full font-bold text-lg shadow-md">
                            📅 Jueves 9 de Octubre
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-[#FFC72C]">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-bold text-sm">⏰ 10:00 - 11:00</span>
                                <span class="bg-[#23b0d8] text-white px-3 py-1 rounded-full text-sm font-semibold">🤖 Inteligencia Artificial</span>
                            </div>
                            
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex items-center gap-4 md:w-1/3">
                                    <img src="{{ asset('images/Dr.AdolfoGuzmanArenas.jpg') }}" alt="Dr. Adolfo Guzmán Arenas" class="w-20 h-20 rounded-full object-cover border-4 border-[#FFC72C] shadow-lg">
                                    <div>
                                        <h4 class="font-bold text-[#061d3f] text-lg">Dr. Adolfo Guzmán Arenas</h4>
                                        <p class="text-gray-600 text-sm">Centro de Investigación en Computación, IPN</p>
                                        <button onclick="document.getElementById('modal-adolfo').classList.remove('hidden')" class="mt-2 bg-[#23b0d8] text-white px-3 py-1 rounded-lg hover:bg-[#1a8bb0] transition-colors text-sm font-semibold shadow-md">
                                            👤 Ver perfil
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="md:w-2/3">
                                    <h5 class="font-bold text-[#061d3f] text-xl mb-3 border-b-2 border-[#FFC72C] pb-2">Los Nuevos Chatbots de la IA, sus Riesgos y la Legislación para Atenderlos</h5>
                                    <p class="text-gray-700 text-sm leading-relaxed mb-4">Los avances recientes de la IA generativa son impresionantes, por ejemplo, ChatGPT. Se utilizan grandes modelos del lenguaje que han sido preentrenados con enormes cantidades de texto para expresarse con naturalidad y sentido común, en español u otros idiomas, respondiendo preguntas habladas o escritas, con gran imaginación y vasto conocimiento...</p>
                                    <div class="flex justify-center">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-gradient-to-r from-[#FFC72C] to-[#FFD700] text-[#061d3f] px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                            🎯 Ingresar a la Conferencia
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8"></div>
                        
                        <!-- Talleres Simultáneos -->
                        <div class="bg-gradient-to-r from-[#061d3f] to-[#23b0d8] p-6 rounded-lg">
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl bg-[#FFC72C] text-[#061d3f] px-6 py-2 rounded-full">16:00 - 19:00</span>
                            </div>
                            <h3 class="text-white text-center text-2xl font-bold mb-6">TALLERES SIMULTÁNEOS</h3>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Sala 1 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#23b0d8]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 1
                                        </div>
                                        <span class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full font-semibold">Project Manager</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="Lic. José Soto Pérez" class="w-16 h-16 rounded-full object-cover border-3 border-[#061d3f] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">Lic. José Soto Pérez</h4>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Sala 2 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#FFC72C]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 2
                                        </div>
                                        <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">M.C. Griselda Cortés Barrera</h4>
                                            <h6 class="font-semibold text-[#061d3f] text-sm">M.C. Edgar Corona Organiche</h6>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h5 class="font-bold text-[#061d3f] mb-2">Adquisición y preprocesamiento de señales EEG</h5>
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>

                
                </div>

                <!-- Viernes 10 -->
                <div id="subtab-content-viernes10" class="subtab-content hidden">
                    <div class="space-y-6">
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-8 shadow-lg border-l-4 border-[#FFC72C]">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-[#061d3f] text-white px-6 py-3 rounded-full font-bold text-lg shadow-md">
                            📅 Viernes 10 de Octubre
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-[#FFC72C]">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-bold text-sm">⏰ 10:00 - 11:00</span>
                                <span class="bg-[#23b0d8] text-white px-3 py-1 rounded-full text-sm font-semibold">🤖 Inteligencia Artificial</span>
                            </div>
                            
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex items-center gap-4 md:w-1/3">
                                    <img src="{{ asset('images/Dr.AdolfoGuzmanArenas.jpg') }}" alt="Dr. Adolfo Guzmán Arenas" class="w-20 h-20 rounded-full object-cover border-4 border-[#FFC72C] shadow-lg">
                                    <div>
                                        <h4 class="font-bold text-[#061d3f] text-lg">Dr. Adolfo Guzmán Arenas</h4>
                                        <p class="text-gray-600 text-sm">Centro de Investigación en Computación, IPN</p>
                                        <button onclick="document.getElementById('modal-adolfo').classList.remove('hidden')" class="mt-2 bg-[#23b0d8] text-white px-3 py-1 rounded-lg hover:bg-[#1a8bb0] transition-colors text-sm font-semibold shadow-md">
                                            👤 Ver perfil
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="md:w-2/3">
                                    <h5 class="font-bold text-[#061d3f] text-xl mb-3 border-b-2 border-[#FFC72C] pb-2">Los Nuevos Chatbots de la IA, sus Riesgos y la Legislación para Atenderlos</h5>
                                    <p class="text-gray-700 text-sm leading-relaxed mb-4">Los avances recientes de la IA generativa son impresionantes, por ejemplo, ChatGPT. Se utilizan grandes modelos del lenguaje que han sido preentrenados con enormes cantidades de texto para expresarse con naturalidad y sentido común, en español u otros idiomas, respondiendo preguntas habladas o escritas, con gran imaginación y vasto conocimiento...</p>
                                    <div class="flex justify-center">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-gradient-to-r from-[#FFC72C] to-[#FFD700] text-[#061d3f] px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                            🎯 Ingresar a la Conferencia
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-8"></div>
                        
                        <!-- Talleres Simultáneos -->
                        <div class="bg-gradient-to-r from-[#061d3f] to-[#23b0d8] p-6 rounded-lg">
                            <div class="flex items-center justify-center mb-4">
                                <span class="text-white font-bold text-xl bg-[#FFC72C] text-[#061d3f] px-6 py-2 rounded-full">16:00 - 19:00</span>
                            </div>
                            <h3 class="text-white text-center text-2xl font-bold mb-6">TALLERES SIMULTÁNEOS</h3>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Sala 1 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#23b0d8]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 1
                                        </div>
                                        <span class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full font-semibold">Project Manager</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="Lic. José Soto Pérez" class="w-16 h-16 rounded-full object-cover border-3 border-[#061d3f] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">Lic. José Soto Pérez</h4>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Sala 2 -->
                                <div class="bg-white rounded-lg p-6 shadow-lg border-l-4 border-[#FFC72C]">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="bg-[#FFC72C] text-[#061d3f] px-4 py-2 rounded-full font-semibold text-sm">
                                            SALA 2
                                        </div>
                                        <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mb-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                        <div>
                                            <h4 class="font-bold text-[#061d3f] text-lg">M.C. Griselda Cortés Barrera</h4>
                                            <h6 class="font-semibold text-[#061d3f] text-sm">M.C. Edgar Corona Organiche</h6>
                                            <p class="text-gray-600 text-sm">Benemérita</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h5 class="font-bold text-[#061d3f] mb-2">Adquisición y preprocesamiento de señales EEG</h5>
                                        <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos.</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-2">
                                        <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                            🎯 Registrarse al taller
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>           
            </div>
        </div>
    </div>
</section>

<!-- Modal Dr. Erik Rodner -->
<div id="modal-erik" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full p-6 relative">
            <button onclick="document.getElementById('modal-erik').classList.add('hidden')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <h3 class="text-2xl font-bold text-[#061d3f] mb-4">Dr. Erik Rodner Rodner</h3>
            <p class="text-gray-700 leading-relaxed">
                Erik Rodner se tituló con honores en Ciencias de la Computación en la Universidad Friedrich Schiller de Jena, Alemania, en 2007. Obtuvo el título de doctorado con "summa cum laude" del Grupo de Visión por Computadora de la Universidad de Jena en 2011, bajo la supervisión de Joachim Denzler. De 2012 a 2013, se unió a la UC Berkeley y al Instituto Internacional de Ciencias de la Computación como investigador postdoctoral. Después, fue investigador sénior y profesor del Grupo de Visión por Computadora de la Universidad de Jena de 2013 a 2016, y posteriormente investigador de Carl Zeiss AG. Actualmente, es profesor de Aprendizaje Automático y Ciencia de Datos en la Universidad de Ciencias Aplicadas de Berlín (HTW Berlín). Sus intereses de investigación incluyen la adaptación de dominios, el aprendizaje profundo, el descubrimiento visual de objetos, el aprendizaje activo y continuo, y la comprensión de escenas.
            </p>
        </div>
    </div>
</div>

<!-- Modal Dr. Adolfo Guzmán -->
<div id="modal-adolfo" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full p-6 relative">
            <button onclick="document.getElementById('modal-adolfo').classList.add('hidden')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <h3 class="text-2xl font-bold text-[#061d3f] mb-4">Dr. Adolfo Guzmán Arenas</h3>
            <p class="text-gray-700 leading-relaxed">
                El Dr. Adolfo Guzmán Arenas es Ingeniero en Comunicaciones y Electrónica de la ESIME del Instituto Politécnico Nacional (IPN). Obtuvo su Maestría y su Doctorado en Ciencias de la Computación en el Instituto Tecnológico de Massachusetts (MIT), EE.UU. Fue profesor del Departamento de Ingeniería Eléctrica del MIT; del Departamento de Inteligencia Mecánica de la Universidad de Edimburgo; del Centro de Investigación y Estudios Avanzados del IPN, donde fundó la Maestría y Doctorado en Computación; del Instituto de Investigación en Matemáticas Aplicadas y Sistemas de la UNAM, donde fue Jefe del Departamento de Computación; y de la Unidad Interdisciplinaria (UPIICSA) del IPN. Fue Director del Centro Científico IBM para América Latina, IBM de México, S.A. Ha sido Investigador Senior de la empresa MicroElectronics and Computer Corporation y Vicepresidente de Ingeniería en International Software Systems, con sede en Austin, TX. Recibió de manos del Presidente Zedillo el Premio Nacional de Ciencias y Artes (1996) y la Presea "Lázaro Cárdenas" (1997). Fue director fundador (1996-2002) del Centro de Investigación en Computación (CIC) del IPN. Adolfo es miembro de la Academia Mexicana de Ciencias, Académico de Honor de la Academia de Ingeniería e investigador nacional emérito del SNI. Es Doctor Honoris Causa del Instituto Nacional de Astrofísica, Óptica y Electrónica. Es Fellow del Institute of Electrical and Electronic Engineers (IEEE), de la Association for Computing Machinery (ACM) y de la Asia-Pacific Artificial Intelligence Association (AAAI). En el CIC usa la Inteligencia Artificial en el análisis de grandes cantidades de datos para predicción y clasificación.
            </p>
        </div>
    </div>
</div>

<!-- Modal Dr. Wilfrido Gómez -->
<div id="modal-wilfrido" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full p-6 relative">
            <button onclick="document.getElementById('modal-wilfrido').classList.add('hidden')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <h3 class="text-2xl font-bold text-[#061d3f] mb-4">Dr. Wilfrido Gómez Flores</h3>
            <p class="text-gray-700 leading-relaxed">
            Wilfrido Gómez Flores recibió en 2004 el grado de Ingeniero en Electrónica y de Comunicaciones por la Universidad Tecnológica de México. Después, en 2006 y 2009, obtuvo los grados de Maestría y Doctorado en Ciencias en Ingeniería Eléctrica, en la especialidad de Bioelectrónica, por el Centro de Investigación y de Estudios Avanzados del Instituto Politécnico Nacional. En 2010, se incorporó al Cinvestav Unidad Tamaulipas como investigador de tiempo completo, colaborando en la línea de investigación de Ingeniería Computacional. Tiene más de 100 publicaciones en revistas y congresos internacionales, y hasta la fecha ha graduado a 14 estudiantes de maestría y cuatro de doctorado en los posgrados del Cinvestav. Actualmente, pertenece al Sistema Nacional de Investigadores en el Nivel 2. Sus intereses de investigación son el análisis de imágenes digitales, el reconocimiento de patrones y el aprendizaje automático.
            </p>
        </div>
    </div>
</div>

<!-- Modal Lic. Edgar Rafael Medina Lozano -->
<div id="modal-edgar" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full p-6 relative">
            <button onclick="document.getElementById('modal-edgar').classList.add('hidden')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
            <h3 class="text-2xl font-bold text-[#061d3f] mb-4">Lic. Edgar Rafael Medina Lozano</h3>
            <p class="text-gray-700 leading-relaxed">
                Edgar Rafael Medina Lozano es un experto en ciberseguridad y análisis forense digital con amplia experiencia en EPAM Systems. Su trabajo se centra en la investigación de incidentes de seguridad y el desarrollo de metodologías para el análisis forense. Ha participado en numerosos proyectos de respuesta a incidentes y ha contribuido al desarrollo de herramientas y técnicas para la detección y análisis de amenazas cibernéticas.
            </p>
        </div>
    </div>
</div>
</div>
</div>
</div>

        <!-- Tab Content Conferencias -->
        <div id="tab-content-conferencias" class="tab-content">
            <div class="mb-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#061d3f] mb-4">Programa de Conferencias</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-[#23b0d8] to-[#FFC72C] mx-auto rounded-full"></div>
                </div>
            
            <!-- Timeline Container -->
            <div class="space-y-8">
                <!-- Lunes 6 de Octubre -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 shadow-lg border-l-4 border-[#23b0d8]">
                    <div class="flex items-center justify-center mb-6">
                        <div class="bg-[#061d3f] text-white px-6 py-3 rounded-full font-bold text-lg shadow-md">
                            📅 Lunes 6 de Octubre
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-[#23b0d8] text-white px-4 py-2 rounded-full font-bold text-sm">⏰ 16:00 - 19:00</span>
                                <span class="bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full text-sm font-semibold">Ponencias On Demand</span>
                            </div>
                            <h4 class="font-bold text-[#061d3f] text-xl mb-3">Ponencias On Demand CONACIC 2024</h4>
                            <p class="text-gray-700 mb-4 leading-relaxed">¡Bienvenidos al Congreso Nacional de Ciencias de la Computación 2024! Accede a las ponencias disponibles bajo demanda.</p>
                            <div class="flex justify-center">
                                <a href="https://conacic.siycise.org/simultaneas/" class="bg-gradient-to-r from-[#23b0d8] to-[#1a8bb0] text-white px-6 py-3 rounded-lg hover:shadow-lg transition-all duration-300 font-semibold flex items-center gap-2">
                                    🎥 Ingresar a las Ponencias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Martes 7 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Martes 7 de Octubre</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">09:30 - 16:00</span>
                            <div>
                                <h4 class="font-semibold text-[#061d3f]">Ponencias On Demand CONACIC 2024</h4>
                                <p class="text-gray-600 mb-2">¡Bienvenidos al Congreso Nacional de Ciencias de la Computación 2024!</p>
                                <a href="https://conacic.siycise.org/simultaneas/" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">
                                    Ingresar a las Ponencias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Miércoles 8 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Miércoles 8 de Octubre</h3>
                    <div class="space-y-4">
                        

                        <!-- Dr. Erik Rodner -->
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">10:00 - 11:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/Dr.ErikRodnerRodner.jpg') }}" alt="Dr. Erik Rodner" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">Dr. Erik Rodner Rodner</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-erik').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">University of Applied Sciences, Berlin</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Advances in Machine Learning - Challenges and Opportunities ahead</h5>
                                <p class="text-gray-600 mt-2">Machine learning has become an everyday technology we are surrounded with. Furthermore, the speed of innovation has increased dramatically, presenting a vast number of opportunities but also critical challenges. In my talk, I will give an overview of current advances, discuss the future ahead of us (at least a prediction for the next few weeks), and link some of the challenges to research done in my lab.</p>
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors mt-4">
                                    Ingresar a la Conferencia
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jueves 9 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Jueves 9 de Octubre</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">10:00 - 11:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/Dr.AdolfoGuzmanArenas.jpg') }}" alt="Dr. Adolfo Guzmán Arenas" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">Dr. Adolfo Guzmán Arenas</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-adolfo').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">Centro de Investigación en Computación, Instituto Politécnico Nacional</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Los Nuevos Chatbots de la IA, sus Riesgos y la Legislación para Atenderlos</h5>
                                <p class="text-gray-600 mt-2">Los avances recientes de la IA generativa son impresionantes, por ejemplo, ChatGPT. Se utilizan grandes modelos del lenguaje que han sido preentrenados con enormes cantidades de texto para expresarse con naturalidad y sentido común, en español u otros idiomas, respondiendo preguntas habladas o escritas, con gran imaginación y vasto conocimiento...</p>
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors mt-4">
                                    Ingresar a la Conferencia
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Viernes 10 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Viernes 10 de Octubre</h3>
                    <div class="space-y-4">

                        <!-- Dr. Wilfrido Gómez Flores -->
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">10:00 - 11:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/Dr.WilfridoGomezFlores.jpg') }}" alt="Dr. Wilfrido Gómez Flores" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">Dr. Wilfrido Gómez Flores</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-wilfrido').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">Centro de Investigación y de Estudios Avanzados, Instituto Politécnico Nacional</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Una Introducción a las Neuronas Morfológicas Dendríticas</h5>
                                <p class="text-gray-600 mt-2">Las neuronas morfológicas dendríticas (DMN) son modelos neuronales artificiales que acoplan dos elementos: neuronas morfológicas, cuyo cómputo se basa en los operadores máximo y mínimo, y estructuras dendríticas, que son unidades computacionales autónomas primarias activadas localmente. Un único DMN puede resolver problemas de clasificación no linealmente separables, como la compuerta XOR, a diferencia del perceptrón basado en producto escalar, el cual requiere apilarse en capas para permitir respuestas no lineales. En esta plática se revisará la estructura básica de una DMN, sus variantes y algunos algoritmos de entrenamiento tradicionales. Asimismo, se mostrarán avances recientes en el entrenamiento de DMN usando el algoritmo de backpropagation, en donde los operadores máximo y mínimo han sido suavizados para hacerlos diferenciables. Finalmente, se mostrarán algunas aplicaciones de las DMN en problemas reales y futuras direcciones de investigación.</p>
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors mt-4">
                                    Ingresar a la Conferencia
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
                            </div>
                        </div>
                    </div>

        <!-- Tab Content Talleres -->
        <div id="tab-content-talleres" class="tab-content">
            <div class="mb-8">
            <h3 class="text-xl font-bold text-[#061d3f] mb-4">Programa de Talleres</h3>
                 <!-- Martes 7 de Octubre -->
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-lg p-6 shadow-lg">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-6 text-center">Martes 7 de Octubre - Talleres Simultáneos</h3>
                    <div class="text-center mb-6">
                        <span class="text-[#23b0d8] font-bold text-lg bg-white px-4 py-2 rounded-full shadow-md">16:00 - 19:00</span>
                    </div>
                    
                    <!-- Grid de salas simultáneas -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Sala 1 -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-[#23b0d8] hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-bold text-[#061d3f] bg-[#23b0d8] text-white px-3 py-1 rounded-lg">SALA 1</h4>
                                <span class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-full font-semibold">Project Manager</span>
                            </div>
                            
                            <div class="flex items-center gap-4 mb-4">
                                <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="Lic. José Soto Pérez" class="w-16 h-16 rounded-full object-cover border-3 border-[#23b0d8] shadow-md">
                                <div class="flex-1">
                                    <h5 class="font-bold text-[#061d3f]">Lic. José Soto Pérez</h5>
                                    <p class="text-sm text-gray-600">Benemérita</p>
                                </div>
                                <button onclick="document.getElementById('modal-beatriz').classList.remove('hidden')" class="bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-lg hover:bg-[#FFD700] transition-colors text-sm font-semibold shadow-md">
                                    👤 Ver perfil
                                </button>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos. El análisis descriptivo permite entender el estado actual de los datos, identificando patrones, relaciones y tendencias a partir de información histórica.</p>
                            </div>
                            
                            <div class="mb-4 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600"><strong>Material:</strong> Equipo de cómputo, Power BI Desktop de Microsoft, Orange y Jupyter (de Anaconda).</p>
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                    🎯 Registrarse al taller
                                </a>
                                <a href="https://drive.google.com/drive/folders/103LCuwSetgkcREMLy6b_z3_EyB_IXWq_?usp=sharing" class="bg-[#061d3f] text-white px-4 py-2 rounded-lg hover:bg-[#0a2654] transition-colors text-center font-semibold shadow-md">
                                    📁 Descargar Materiales
                                </a>
                            </div>
                        </div>
                        
                        <!-- Sala 2 -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-[#FFC72C] hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-bold text-white bg-[#FFC72C] px-3 py-1 rounded-lg">SALA 2</h4>
                                <span class="text-sm bg-[#23b0d8] text-white px-3 py-1 rounded-full font-semibold">Señales EEG</span>
                            </div>
                            
                            <div class="flex items-center gap-4 mb-4">
                                <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M.C. Griselda Cortés Barrera" class="w-16 h-16 rounded-full object-cover border-3 border-[#FFC72C] shadow-md">
                                <div class="flex-1">
                                    <h5 class="font-bold text-[#061d3f]">M.C. Griselda Cortés Barrera</h5>
                                    <h6 class="font-semibold text-[#061d3f] text-sm">M.C. Edgar Corona Organiche</h6>
                                    <p class="text-sm text-gray-600">Benemérita</p>
                                </div>
                                <button onclick="document.getElementById('modal-beatriz').classList.remove('hidden')" class="bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded-lg hover:bg-[#FFD700] transition-colors text-sm font-semibold shadow-md">
                                    👤 Ver perfil
                                </button>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="font-bold text-[#061d3f] mb-2">Adquisición y preprocesamiento de señales EEG</h5>
                                <p class="text-gray-700 text-sm leading-relaxed">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos. El análisis descriptivo permite entender el estado actual de los datos, identificando patrones, relaciones y tendencias.</p>
                            </div>
                            
                            <div class="mb-4 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600"><strong>Material:</strong> Equipo de cómputo, Power BI Desktop de Microsoft, Orange y Jupyter (de Anaconda).</p>
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors text-center font-semibold shadow-md">
                                    🎯 Registrarse al taller
                                </a>
                                <a href="https://drive.google.com/drive/folders/103LCuwSetgkcREMLy6b_z3_EyB_IXWq_?usp=sharing" class="bg-[#061d3f] text-white px-4 py-2 rounded-lg hover:bg-[#0a2654] transition-colors text-center font-semibold shadow-md">
                                    📁 Descargar Materiales
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Miércoles 8 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">16:00-19:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/Dra. AnaLuisaBallinasHernández.jpeg') }}" alt="Dra. Ana Luisa Ballinas Hernández" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">Ing. Sebástian Méndez Méndez</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-ana').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">Benemérita Universidad Autónoma de Puebla</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Ánalisis avanzado de eventos de ciberseguridad</h5>
                                <p class="text-gray-600 mt-2">En este taller conocerás los conceptos básicos de realidad aumentada y aprenderás a construir aplicaciones móviles que incluyan la tecnología de realidad aumentada para superponer elementos virtuales con el mundo real. Las aplicaciones generadas se podrán instalar en dispositivos con sistema operativo Android. La lectura del mundo real se realiza mediante la cámara del dispositivo, de forma que al leer un marcador se detonan los objetos virtuales que son añadidos al mundo real. Para la creación de aplicaciones usaremos el motor de videojuegos Unity 3D y la biblioteca Vuforia, así como el lenguaje de programación C#.</p>
                                <p class="text-gray-600 mt-2">Material: Laptop, Unity Hub, Editor de Unity 2022.3.17f1 LTS, Vuforia Engine 10.25, ⁠Dispositivo Android , Cable USB para el dispositivo Android.</p>
                                <div class="flex gap-4 mt-4">
                                    <a href="#" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Registrate al taller</a>
                                    <a href="#" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Manual de Materiales</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jueves 9 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Jueves 9 de Octubre</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">16:00-19:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/Lic.EduardoOcelotlValencia.jpg') }}" alt="Lic. Eduardo Ocelotl Valencia" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">M.C. Jonathan Axel Cruz Vázquez</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-eduardo').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">CIC-Instituto Politécnico Nacional</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Redes Neuronales Artificiales: Conceptos, Relevancia y Aplicaciones</h5>
                                <p class="text-gray-600 mt-2">Las redes neuronales artificiales se han convertido en una herramienta muy útil en los últimos años para resolver problemas de toda índole. Los avances en esta materia se han dado, por un lado, por la mejor comprensión que se tiene de su operación y, por otro lado, por la consolidación en el desarrollo de procesadores que permiten que los algoritmos de aprendizaje asociados se hayan desarrollado. En este tutorial, después de una introducción, se verá un conjunto de conceptos relacionados con las redes neuronales artificiales como modelos operativos de los cerebros biológicos. Enseguida, se verá por qué las redes neuronales artificiales son hoy en día una herramienta tan poderosa. Finalmente, se abordará una aplicación de las redes neuronales a la generación de modelos matemáticos a partir de datos, en particular, para el cálculo de características de objetos en dos y tres dimensiones, como son su área, perímetro y número de Euler.</p>
                                <div class="mt-4">
                                    <a href="#" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Registrate al taller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
<!-- JavaScript para las pestañas -->
<script>
    // Ejecutar cuando el DOM esté completamente cargado
    document.addEventListener('DOMContentLoaded', function() {
        console.log("DOM cargado, inicializando pestañas");
        
        // Verificar todos los elementos de pestañas
        console.log("Verificando elementos de pestañas:");
        console.log("tab-general:", document.getElementById("tab-general"));
        console.log("tab-conferencias:", document.getElementById("tab-conferencias"));
        console.log("tab-talleres:", document.getElementById("tab-talleres"));
        console.log("tab-content-general:", document.getElementById("tab-content-general"));
        console.log("tab-content-conferencias:", document.getElementById("tab-content-conferencias"));
        console.log("tab-content-talleres:", document.getElementById("tab-content-talleres"));
        
        // Ocultar todos los contenidos de pestañas primero
        var tabContents = document.getElementsByClassName("tab-content");
        for (var i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.add("hidden");
        }
        
        // Configurar la pestaña general como activa por defecto
        var generalTab = document.getElementById("tab-general");
        if (generalTab) {
            generalTab.classList.add("border-b-2", "border-[#23b0d8]", "text-[#061d3f]");
            generalTab.classList.remove("text-gray-500");
        }
        
        // Mostrar el contenido de la pestaña general por defecto
        var generalContent = document.getElementById("tab-content-general");
        if (generalContent) {
            generalContent.classList.remove("hidden");
            console.log("Pestaña general activada correctamente");
        } else {
            console.error("No se encontró el contenido de la pestaña general");
        }
    });

    function openTab(tabName) {
        console.log("Función openTab llamada con: " + tabName);
        
        // Ocultar todos los contenidos de pestañas
        var tabContents = document.getElementsByClassName("tab-content");
        console.log("Número de elementos con clase tab-content: " + tabContents.length);
        
        for (var i = 0; i < tabContents.length; i++) {
            console.log("Ocultando: ", tabContents[i].id);
            tabContents[i].classList.add("hidden");
        }
        
        // Mostrar el contenido de la pestaña seleccionada
        var selectedTab = document.getElementById("tab-content-" + tabName);
        console.log("Mostrando pestaña: ", selectedTab);
        
        if (selectedTab) {
            selectedTab.classList.remove("hidden");
            console.log("Pestaña mostrada: ", selectedTab.id);
        } else {
            console.error("No se encontró el elemento tab-content-" + tabName);
        }
        
        // Actualizar estilos de los botones de pestañas
        var tabButtons = document.getElementsByClassName("tab-btn");
        for (var i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("border-b-2", "border-[#23b0d8]", "text-[#061d3f]");
            tabButtons[i].classList.add("text-gray-500");
        }
        
        // Resaltar el botón de la pestaña seleccionada
        var selectedButton = document.getElementById("tab-" + tabName);
        if (selectedButton) {
            selectedButton.classList.add("border-b-2", "border-[#23b0d8]", "text-[#061d3f]");
            selectedButton.classList.remove("text-gray-500");
        } else {
            console.error("No se encontró el elemento tab-" + tabName);
        }
    }

    // Función para manejar las sub-pestañas dentro del programa general
    function openSubTab(subTabName) {
        console.log("Función openSubTab llamada con: " + subTabName);
        
        // Ocultar todas las sub-pestañas
        var subTabContents = document.getElementsByClassName("subtab-content");
        for (var i = 0; i < subTabContents.length; i++) {
            subTabContents[i].classList.add("hidden");
        }
        
        // Mostrar la sub-pestaña seleccionada
        var selectedSubTab = document.getElementById("subtab-content-" + subTabName);
        if (selectedSubTab) {
            selectedSubTab.classList.remove("hidden");
        }
        
        // Actualizar estilos de los botones de sub-pestañas (igual que las pestañas principales)
        var subTabButtons = document.getElementsByClassName("subtab-btn");
        for (var i = 0; i < subTabButtons.length; i++) {
            subTabButtons[i].classList.remove("border-b-2", "border-[#23b0d8]", "text-[#061d3f]");
            subTabButtons[i].classList.add("text-gray-500");
        }
        
        // Resaltar el botón de la sub-pestaña seleccionada (igual que las pestañas principales)
        var selectedSubButton = document.getElementById("subtab-" + subTabName);
        if (selectedSubButton) {
            selectedSubButton.classList.add("border-b-2", "border-[#23b0d8]", "text-[#061d3f]");
            selectedSubButton.classList.remove("text-gray-500");
        }
    }

    // Inicializar las sub-pestañas al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar la primera sub-pestaña por defecto
        openSubTab('lunes6');
    });
</script>
@endsection