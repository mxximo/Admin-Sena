@extends('layouts.app')

@section('content')
<h1>Formulario Category</h1>

    <br>

    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">

        <br>
         <label for="cell_number">Cell_number:</label>
        <input type="text" id="cell_number" name="cell_number">
        <br>
        <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
    </form>

    @endsection