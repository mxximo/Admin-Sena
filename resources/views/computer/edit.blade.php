@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">Actualizar Computadora</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="number" class="form-label">Número de la Computadora</label>
                        <input type="text" name="number" id="number" value="{{ old('number', $computer->number) }}">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Marca</label>
                        <input type="text" name="brand" id="brand" value="{{ old('brand', $computer->brand) }}">
                    </div>

                    <button type="submit">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
