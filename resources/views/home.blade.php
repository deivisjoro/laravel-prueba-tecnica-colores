{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Bienvenido a Fashion Color Match</h3>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Fashion Colors" class="img-fluid rounded mx-auto d-block" style="max-height: 300px;">
                    <p class="mt-3">En el mundo de la moda, la combinación de colores es fundamental. Los profesionales de la moda en todas sus variantes suelen utilizar un conocimiento empírico y subjetivo para combinar los colores de las distintas prendas.</p>
                    <p>Como ingenieros y desarrolladores, nuestro objetivo es desmenuzar este conocimiento y transformarlo en un algoritmo que permita discernir si dos prendas de ropa combinan en cuanto a color. Al explorar diversas teorías del color aplicadas a la moda, hemos desarrollado una herramienta que, aunque no pretende ser una verdad absoluta, ofrece un método sistemático y tecnológico para evaluar combinaciones de colores.</p>
                    <p>Te invitamos a explorar nuestro sitio y utilizar nuestra herramienta para descubrir nuevas y emocionantes combinaciones de colores que puedan realzar tus elecciones de moda y vestuario.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
