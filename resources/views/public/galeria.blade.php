@extends('layouts.public')

@section('titulo', 'Galería - CONACIC')

@section('contenido')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#061d3f] text-center mb-6">Galería de Eventos</h2>
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="text-gray-700 leading-relaxed">Explora los momentos más destacados de nuestros congresos anteriores a través de esta colección de imágenes que capturan la esencia de CONACIC.</p>
        </div>

        <!-- Image Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            @php
                $images = collect(File::files(public_path('images/galeria')))
                    ->filter(function($file) {
                        $extension = strtolower($file->getExtension());
                        return in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                    });
            @endphp

            @foreach($images as $image)
                @php
                    $imagePath = 'images/galeria/' . $image->getFilename();
                @endphp
                <div class="group relative overflow-hidden rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset($imagePath) }}" 
                             alt="Evento CONACIC" 
                             class="w-full transition-transform duration-700 group-hover:scale-110"
                             style="height: auto; min-height: 250px; max-height: 400px; object-fit: contain;"
                             onerror="this.onerror=null; this.src='{{ asset('images/imagenprueba.png') }}';">                             
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-xl font-semibold mb-2">CONACIC</h3>
                            <p class="text-sm opacity-90">Momentos memorables de nuestros eventos</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Slider Section -->
        <div class="mt-16 max-w-5xl mx-auto overflow-hidden">
            <h3 class="text-2xl font-bold text-[#061d3f] text-center mb-8">Momentos Destacados</h3>
            <div class="relative">
                <div class="swiper-container">
                    <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide">
                        @foreach($images as $image)
                            @php
                                $imagePath = 'images/galeria/' . $image->getFilename();
                            @endphp
                            <div class="flex-none w-full md:w-2/3 lg:w-1/2 snap-center px-4">
                                <div class="relative rounded-lg overflow-hidden shadow-xl">
                                    <img src="{{ asset($imagePath) }}" 
                                         alt="Evento CONACIC" 
                                         class="w-full h-64 object-cover"
                                         onerror="this.onerror=null; this.src='{{ asset('images/imagenprueba.png') }}';">                                         
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                            <p class="text-sm font-medium">Congreso Internacional y Nacional de Ciencias de la Computación</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.swiper-container');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
    });
</script>
@endpush

@endsection