@extends('layouts.app')

@section('content')

  <h1>Formulario Category</h1>

    <br>

    <form action="{{ route('training_center.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location">

        <br>
        <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
    </form>

    @endsection