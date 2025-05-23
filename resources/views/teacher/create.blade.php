@extends('layouts.app')

@section('content')
<h1>Formulario Category</h1>

    <br>

    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>

        <label for="brand">Email:</label>
        <input type="text" id="email" name="email">

        <br>
        <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
    </form>

    @endsection