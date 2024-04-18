{{-- resources/views/colors/compatibility.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <h3>Resultado de Compatibilidad de Colores</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h4>Colores Evaluados</h4>
                    <div class="d-flex justify-content-around align-items-center">
                        <div>
                            <p>Color 1:</p>
                            <div style="width: 50px; height: 50px; background-color: {{ $color1 }};"></div>
                            <p>{{ $color1 }}</p>
                        </div>
                        <div>
                            <p>Color 2:</p>
                            <div style="width: 50px; height: 50px; background-color: {{ $color2 }};"></div>
                            <p>{{ $color2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <h4>Puntuación de Compatibilidad</h4>
                    <p>{{ number_format($compatibilityScore, 2) }}</p>
                    <p>{{ $compatibilityScore > 0.75 ? '¡Gran combinación!' : ($compatibilityScore > 0.5 ? 'Buena combinación.' : 'Combinación pobre.') }}</p>
                </div>
                <a href="{{ route('colors.form') }}" class="btn btn-primary">Probar Nuevos Colores</a>
            </div>
        </div
    </div>
</div>
@endsection
