@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Centros de entrenamiento</h1>

        <a href="{{ route('training_center.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($trainingCenters as $trainingCenter)
                    <tr>
                        <td>{{ $trainingCenter['id'] }}</td>
                        <td>{{$trainingCenter['name']}}</td>
                        <td>{{ $trainingCenter['location'] }}</td>
                        <td>
                            <a href="{{route('training_center.show',$trainingCenter['id'])}}">ver mas</a>
                        </td>
                        <td>
                            <a href="{{route('training_center.edit',$trainingCenter['id'])}}">editar</a>
                        </td>
                        <td>
                            <form action="{{route('training_center.destroy',$trainingCenter['id'])}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit">eliminar</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

@endsection

