@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Listado de Course</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Number</th>
                    <th>Day</th>
                    <th>Editar</th>
                    <th>Ver</th>
                    <th>Delate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                         <td>{{ $course->day }}</td>
                        <td>

                            <a href="{{ route('course.edit', $course) }}" class="btn btn-primary btn-sm">Editar</a>
                        <td>
                            <a href="{{ route('course.show', $course) }}" class="btn btn-success btn-sm">Ver</a>
                        </td>

                        </td>
                        <td>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                    <i class="bi bi-trash-fill"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
