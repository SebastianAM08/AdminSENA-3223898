@extends('layouts.app')

@section('content')
    <h1>LISTAR CENTROS DE FORMACIÓN</h1>

    <div class="container">
        <div class="mb-3">
            <a href="{{ route('training_center.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nuevo Centro
            </a>
        </div>
        <table id="idTrainingCenter" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($training_centers as $training_center)
                    <tr>
                        <td>{{ $training_center->id }}</td>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->location }}</td>
                        <td>
                            <a href="{{ route('training_center.show', $training_center->id) }}"
                                class="btn btn-sm btn-primary">Mostrar</a>
                            <a href="{{ route('training_center.edit', $training_center->id) }}"
                                class="btn btn-sm btn-secondary">Editar</a>
                            <form action="{{ route('training_center.destroy', $training_center->id) }}" method="POST"
                                style="display:inline-block"
                                onsubmit="return confirm('Eliminar centro? Esto borrará {{ $training_center->courses->count() }} curso(s) y {{ $training_center->teachers->count() }} instructor(es) relacionados.')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
