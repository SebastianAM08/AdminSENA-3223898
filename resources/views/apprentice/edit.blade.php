@extends('layouts.app')

@section('content')
    <h1>Editar Aprendiz</h1>

    <div class="container">
        <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $apprentice->name) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $apprentice->email) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="cell_number" class="form-control" value="{{ old('cell_number', $apprentice->cell_number) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Curso</label>
                <select name="course_id" class="form-control">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ old('course_id', $apprentice->course_id) == $course->id ? 'selected' : '' }}>
                            {{ $course->id }} - {{ $course->course_number }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Computador</label>
                <select name="computer_id" class="form-control">
                    @foreach ($computers as $computer)
                        <option value="{{ $computer->id }}" {{ old('computer_id', $apprentice->computer_id) == $computer->id ? 'selected' : '' }}>
                            {{ $computer->id }} - {{ $computer->number }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
