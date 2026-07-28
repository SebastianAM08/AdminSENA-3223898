@extends('layouts.app')

@section('content')
    <h1>Editar Profesor</h1>

    <div class="container">
        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" value="{{ $teacher->email }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Área Id</label>
                <input type="number" name="area_id" class="form-control" value="{{ $teacher->area_id }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Centro Id</label>
                <input type="number" name="training_center_id" class="form-control" value="{{ $teacher->training_center_id }}">
            </div>
            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
