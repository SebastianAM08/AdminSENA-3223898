@extends('layouts.app')

@section('content')
    <h1>Editar Curso</h1>

    <div class="container">
        <form action="{{ route('course.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Número de curso</label>
                <input type="text" name="course_number" class="form-control" value="{{ $course->course_number }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Día</label>
                <input type="text" name="day" class="form-control" value="{{ $course->day }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Área Id</label>
                <input type="number" name="area_id" class="form-control" value="{{ $course->area_id }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Centro Id</label>
                <input type="number" name="training_center_id" class="form-control" value="{{ $course->training_center_id }}">
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('course.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
