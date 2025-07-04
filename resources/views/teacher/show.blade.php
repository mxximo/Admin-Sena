@extends('layouts.app')
@section('content')

    <h3>detalles del profesor</h3>

    <table class="table">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>email</th>
        </tr>
        <tr>
            <td>{{$teacher['id']}}</td>
            <td>{{$teacher['name']}}</td>
            <td>{{$teacher['email']}}</td>
        </tr>
    </table>

@endsection
