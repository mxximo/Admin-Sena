@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">Actualizar Aprendiz</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $apprentice->name) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $apprentice->email) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="cell_number" class="form-label">Número de Celular</label>
                        <input type="text" name="cell_number" id="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
