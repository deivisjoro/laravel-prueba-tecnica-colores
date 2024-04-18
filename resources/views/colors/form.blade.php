{{-- resources/views/colors/form.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="text-center">Comprobar Compatibilidad de Colores</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('colors.compatibility') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="color1" class="form-label">Color 1 (hex):</label>
                        <input type="text" id="color1" name="color1" value="{{ old('color1') }}" class="form-control {{ $errors->has('color1') ? 'is-invalid' : '' }}">
                        @if ($errors->has('color1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('color1') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="color2" class="form-label">Color 2 (hex):</label>
                        <input type="text" id="color2" name="color2" value="{{ old('color2') }}" class="form-control {{ $errors->has('color2') ? 'is-invalid' : '' }}">
                        @if ($errors->has('color2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('color2') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Comprobar Compatibilidad</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
