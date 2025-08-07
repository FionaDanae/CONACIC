import './bootstrap';
import AOS from 'aos'; //importación de toda la paquetería
import 'aos/dist/aos.css';

//inicializar efecto
AOS.init({
    duration: 1000,
    delay: 200, //antes de la animación existe un retraso
    once: true, //cuántas veces quieres que se repita
});

import Typed from 'typed.js';
document.addEventListener('DOMContentLoaded', function(){ //arrow function, estamos diciendo que cuando este cargado el contenido entonces va a cargar la siguiente función
    
    // Solo inicializar Typed.js si el elemento existe
    const typedElement = document.getElementById('typed-title');
    if (typedElement) {
        const typedTitle = new Typed("#typed-title",{ //const que es un valor que no va a cambiar, var inicializar variable, let 
            strings:["Bienvenidos al Himalaya", "Bienvenidos a la montaña", "Helado??"],
            typeSpeed: 100, //qué tan rápido queremos que se escriba
            showCursor: false, //q
            loop: true, //queremos que se siga ejecutando o solo una vez
            backSpeed: 50, //qué tan rápido queremos que se elimine
        })
    }
});