@extends('layouts.app')

@section('content')

<h3>editar datos del profesor</h3>

<form action="{{route('teacher.update',$teacher)}}" method="POST">
    @csrf
    @method('put')
    <label for="name">ingrese el nombre del profesor:</label>
    <input type="text" id="name" name="name" class="d-block mt-2 form-control " value="{{old('name',$teacher->name)}}">
    <label for="email">ingrese el e-gmail</label>
    <input type="email" name="email" id="email" class="d-block -mt-2 " value="{{old('name',$teacher->email)}}">
    <input type="submit" value="enviar" class="mt-3">
</form>

@endsection
