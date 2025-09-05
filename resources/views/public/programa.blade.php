@extends('layouts.public')

@section('titulo', 'PROGRAMA')

@section('contenido')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-[#061d3f] mb-8 text-center">Programa CONACIC 2025</h1>

        <!-- Programa de Conferencias -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-[#061d3f] mb-6">Programa de Conferencias</h2>
            
            <!-- Timeline Container -->
            <div class="space-y-8">
                <!-- Lunes 6 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Lunes 6 de Octubre</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">16:00 - 19:00</span>
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

                <!-- Martes 8 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Martes 8 de Octubre</h3>
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

                <!-- Miércoles 9 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Miércoles 9 de Octubre</h3>
                    <div class="space-y-4">
                        <!-- Inauguración -->
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">09:30 - 10:00</span>
                            <div>
                                <h4 class="font-semibold text-[#061d3f]">Inauguración del Congreso CONACIC 2024</h4>
                                <p class="text-gray-600 mb-2">¡Bienvenidos al Congreso Nacional de Ciencias de la Computación 2024!</p>
                                <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">
                                    Ingresar a la Inauguración
                                </a>
                            </div>
                        </div>

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

                <!-- Jueves 10 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Jueves 10 de Octubre</h3>
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

                <!-- Viernes 11 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Viernes 11 de Octubre</h3>
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
</section>

<!-- Programa de Talleres -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-[#061d3f] mb-6">Programa de Talleres</h2>
            
            <!-- Timeline Container -->
            <div class="space-y-8">
                <!-- Lunes 6 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Lunes 6 de Octubre</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <span class="text-[#23b0d8] font-semibold w-32">16:00-19:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/Lic.EdgarRafaelMedinaLozano.png') }}" alt="Lic. Edgar Rafael Medina Lozano" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">M.C. Saulo Abraham Gante Díaz</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-edgar').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">CIC-IPN MÉXICO</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">SALA 1: Reconstrucción en 3D</h5>
                                <p class="text-gray-600 mt-2">En este taller vamos a emprender un viaje en el mundo de la seguridad defensiva, haciendo énfasis en las tareas de investigación que se realizan como parte del proceso de respuesta a incidentes y el análisis forense con un enfoque practico orientado al resolver un caso de envenenamiento a nivel de red.</p>
                                <div class="mt-4 p-4 bg-gray-100 rounded-lg">
                                    <h6 class="font-semibold text-[#061d3f] mb-2">Material Requerido:</h6>
                                    <p class="text-gray-600">Computadora, software de virtualización (vmware, virtualbox), Distribución Kali o Parrot y conexión a internet</p>
                                </div>
                                <a href="{{ route('taller1') }}" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors mt-4">
                                    Registrate al taller
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
                            <span class="text-[#23b0d8] font-semibold w-32">16:00-19:00</span>
                            <div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M. C. Beatriz Alejandra Flores Rojas" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">Lic. José Soto Pérez</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-beatriz').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">Benemérita</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Sala 1: Project Manager</h5>
                                <p class="text-gray-600 mt-2">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos. El análisis descriptivo permite entender el estado actual de los datos, identificando patrones, relaciones y tendencias a partir de información histórica. Esto es fundamental para evaluar situaciones, detectar problemas o áreas de oportunidad, y comunicar hallazgos de manera clara. Por su parte, el análisis predictivo permite anticipar futuros escenarios, proyectando comportamientos y posibles resultados con base en datos pasados. Esto es vital en la planificación estratégica, ya que ayuda a prever riesgos, optimizar recursos y diseñar estrategias adaptativas. El dominio de ambas herramientas ofrece una visión integral: el análisis descriptivo proporciona una base sólida de conocimiento sobre la realidad actual, mientras que el predictivo facilita una preparación proactiva ante posibles cambios. En conjunto, permiten mejorar la precisión en la toma de decisiones y el diseño de estrategias efectivas. Existen diversas herramientas que respaldan estos tipos de análisis, como Power BI, Orange, Jupyter, entre otras.</p>
                                <p class="text-gray-600 mt-2">Material: Equipo de computo, Power BI Desktop de microsoft, Orange y Jupiter (de anaconda).</p>
                                <div class="flex gap-4 mt-4">
                                    <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Registrate al taller</a>
                                    <a href="https://drive.google.com/drive/folders/103LCuwSetgkcREMLy6b_z3_EyB_IXWq_?usp=sharing" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Descargar Materiales</a>
                                </div>
                                <div class="flex items-center gap-4 mb-2">
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/M.C.BeatrizAlejadraFloresRojas.jpg') }}" alt="M. C. Beatriz Alejandra Flores Rojas" class="w-16 h-16 rounded-full object-cover border-2 border-[#061d3f]">
                                        <h4 class="font-semibold text-[#061d3f]">M.C. Griselda Cortés Barrera</h4>
                                        <h4 class="font-semibold text-[#061d3f]">M.C. Edgar Corona Organiche</h4>
                                    </div>
                                    <button onclick="document.getElementById('modal-beatriz').classList.remove('hidden')" class="text-sm bg-[#FFC72C] text-[#061d3f] px-3 py-1 rounded hover:bg-[#FFD700] transition-colors">
                                        Ver perfil
                                    </button>
                                </div>
                                <p class="text-gray-600">Benemérita</p>
                                <h5 class="font-semibold text-[#061d3f] mt-2">Sala 2: Adquisición y preprocesamiento de señales EEG</h5>
                                <p class="text-gray-600 mt-2">Conocer herramientas de análisis descriptivo y predictivo es crucial para tomar decisiones informadas en diversos campos. El análisis descriptivo permite entender el estado actual de los datos, identificando patrones, relaciones y tendencias a partir de información histórica. Esto es fundamental para evaluar situaciones, detectar problemas o áreas de oportunidad, y comunicar hallazgos de manera clara. Por su parte, el análisis predictivo permite anticipar futuros escenarios, proyectando comportamientos y posibles resultados con base en datos pasados. Esto es vital en la planificación estratégica, ya que ayuda a prever riesgos, optimizar recursos y diseñar estrategias adaptativas. El dominio de ambas herramientas ofrece una visión integral: el análisis descriptivo proporciona una base sólida de conocimiento sobre la realidad actual, mientras que el predictivo facilita una preparación proactiva ante posibles cambios. En conjunto, permiten mejorar la precisión en la toma de decisiones y el diseño de estrategias efectivas. Existen diversas herramientas que respaldan estos tipos de análisis, como Power BI, Orange, Jupyter, entre otras.</p>
                                <p class="text-gray-600 mt-2">Material: Equipo de computo, Power BI Desktop de microsoft, Orange y Jupiter (de anaconda).</p>
                                <div class="flex gap-4 mt-4">
                                    <a href="https://dcytic2.webex.com/dcytic2/j.php?MTID=m0fa3cc4403c2e070199fbe2158c0823c" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Registrate al taller</a>
                                    <a href="https://drive.google.com/drive/folders/103LCuwSetgkcREMLy6b_z3_EyB_IXWq_?usp=sharing" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors">Descargar Materiales</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Miércoles 8 de Octubre -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-[#061d3f] mb-4">Miércoles 8 de Octubre</h3>
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
                                <p class="text-gray-600 mt-2">En este taller vamos a emprender un viaje en el mundo de la seguridad defensiva, haciendo énfasis en las tareas de investigación que se realizan como parte del proceso de respuesta a incidentes y el análisis forense con un enfoque practico orientado al resolver un caso de envenenamiento a nivel de red.</p>
                                <div class="mt-4 p-4 bg-gray-100 rounded-lg">
                                    <h6 class="font-semibold text-[#061d3f] mb-2">Material Requerido:</h6>
                                    <p class="text-gray-600">Computadora, software de virtualización (vmware, virtualbox), Distribución Kali o Parrot y conexión a internet</p>
                                </div>
                                <a href="#" class="inline-block bg-[#23b0d8] text-white px-4 py-2 rounded-lg hover:bg-[#1a8bb0] transition-colors mt-4">
                                    Registrate al taller
                                </a>
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
@endsection