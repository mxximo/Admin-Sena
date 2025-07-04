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
                    <th>Ver</th>
                    <th>Delate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        <td>

                            <a href="{{ route('area.edit', $area) }}" class="btn btn-primary btn-sm">Editar</a>
                        <td>
                            <a href="{{ route('area.show', $area) }}" class="btn btn-success btn-sm">Ver</a>
                        </td>

                        </td>
                        <td>
                            <form action="{{ route('area.destroy', $area->id) }}" method="POST">
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
