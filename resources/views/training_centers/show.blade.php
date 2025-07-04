@extends('layouts.app')

@section('content')

    <div>
        <h2>detalles del centro de entrenamiento</h2>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>ubicacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$trainingCenter['id']}}</td>
                        <td>{{$trainingCenter['name']}}</td>
                        <td>{{$trainingCenter['location']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
