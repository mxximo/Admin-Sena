@extends('layouts.app')

@section('content')

    <div>
        <h1>actualizar centro de entrenamiento</h1>
        <div>
            <form action="{{route('training_center.update',$trainingCenter->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="">nombre del centro:</label>
                    <input type="text" name="name" value="{{old('name',$trainingCenter->name)}}">
                </div>
                <div>
                    <label for="">ubicacion del centro:</label>
                    <input type="text" name="location" value="{{old('location',$trainingCenter->location)}}">
                </div>
                <button type="submit">enviar</button>
            </form>
        </div>
    </div>

@endsection
