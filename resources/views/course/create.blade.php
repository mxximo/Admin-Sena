@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Formulario Category</h1>

    <br>

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="course_number">Course_number:</label>
        <input type="text" id="course_number" name="course_number">
        <br>

        <label for="day">Day:</label>
        <input type="text" id="day" name="day">

        <br>
        <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
    </form>
</div>

    @endsection