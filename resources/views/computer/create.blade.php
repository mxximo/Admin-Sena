@extends('layouts.app')

@section('content')
<h1>Formulario Category</h1>

    <br>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Number:</label>
        <input type="text" id="number" name="number">
        <br>

        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand">

        <br>
        <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
    </form>

    @endsection