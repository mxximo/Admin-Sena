@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h1>Formulario Category</h1>

    <br>

    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

          <div class="mb-3">
              <label for="title">Name:</label>
            <input type="text" id="title" name="name" >
          </div>

            <br>


        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>
</div>
  

    @endsection