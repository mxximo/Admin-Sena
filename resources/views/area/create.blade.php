@extends('layouts.app')

@section('content')
  <h1>Formulario Category</h1>

    <br>

    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="title">Name:</label>

            <input type="text" id="title" name="name" >

            <br>


        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>

    @endsection