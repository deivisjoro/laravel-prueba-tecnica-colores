{{-- resources/views/help.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Ayuda y Soporte</h3>
                </div>
                <div class="card-body">
                    <h4>Cómo Funciona el Sitio</h4>
                    <p>Este sitio ofrece una herramienta avanzada para evaluar y descubrir combinaciones de colores en la moda. Mediante algoritmos basados en teorías del color, los usuarios pueden introducir códigos de colores en formato hexadecimal para determinar si combinan bien según criterios estéticos y prácticos.</p>
                    
                    <h4>Uso de la Herramienta de Colores</h4>
                    <p>La herramienta de colores es fácil de usar y está diseñada para ofrecer resultados inmediatos y precisos:</p>
                    <ul>
                        <li><strong>Acceder a la Herramienta:</strong> Navega a la sección "Colores" desde cualquier parte del sitio.</li>
                        <li><strong>Introducir Colores:</strong> En los campos provistos, introduce los códigos hexadecimales de los colores que deseas combinar. Asegúrate de que cada código comience con un símbolo de numeral (#) seguido de seis caracteres hexadecimales.</li>
                        <li><strong>Evaluar la Combinación:</strong> Una vez ingresados los colores, presiona el botón "Comprobar Compatibilidad" para ver el análisis de compatibilidad. El resultado te dirá qué tan bien combinan los colores según una escala del 0 al 1, donde 1 indica una combinación perfecta.</li>
                    </ul>

                    <h4>Consejos Adicionales</h4>
                    <p>Además de la herramienta de combinación de colores, considera explorar diferentes combinaciones y configuraciones para ver cómo varían los resultados. Experimentar con distintas teorías del color puede ofrecerte perspectivas únicas y resultados sorprendentes.</p>
                    
                    <h4>Contacto</h4>
                    <p>Si tienes preguntas adicionales o necesitas soporte técnico, no dudes en contactarnos a través de nuestro formulario de contacto o enviando un correo electrónico a deivisjoro@yahoo.com.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
