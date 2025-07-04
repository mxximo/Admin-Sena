@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Listado de Áreas</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Numero</th>
                    <th>Ver</th>
                    <th>Delate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $apprentice->id }}</td>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>

                            <a href="{{ route('apprentice.edit', $apprentice) }}" class="btn btn-primary btn-sm">Editar</a>
                        <td>
                            <a href="{{ route('apprentice.show', $apprentice) }}" class="btn btn-success btn-sm">Ver</a>
                        </td>

                        </td>
                        <td>
                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                    <i class="bi bi-trash-fill"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
