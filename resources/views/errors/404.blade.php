{{-- resources/views/errors/404.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3 class="card-title">Página No Encontrada</h3>
                    <p class="card-text">Lo sentimos, la página que estás buscando no existe.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
