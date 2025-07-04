@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">Actualizar Course</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('course.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="course_number" class="form-label">Course Number</label>
                        <input type="text" name="course_number" id="course_number" value="{{ old('course_number', $course->course_number) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="day" class="form-label">Day</label>
                        <input type="text" name="day" id="day" value="{{ old('day', $course->day) }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
