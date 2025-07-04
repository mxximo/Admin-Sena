@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1>Formulario Category</h1>

    <br>

    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        </div>
        <br>

       <div class="mb-3">
         <label for="email">Email:</label>
        <input type="text" id="email" name="email">
       </div>

        <br>
        <div class="mb-3">
             <label for="cell_number">Cell_number:</label>
        <input type="text" id="cell_number" name="cell_number">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
    </form>
</div>

    @endsection

    