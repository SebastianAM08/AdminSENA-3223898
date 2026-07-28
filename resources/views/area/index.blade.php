@extends('layouts.app')

@section('content')
    <h1>LISTAR ÁREAS</h1>

    <div class="container">
        <div class="mb-3">
            <a href="{{ route('area.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nueva Área
            </a>
        </div>
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        <td>
                            <a href="{{ route('area.show', $area->id) }}" class="btn btn-sm btn-primary">Mostrar</a>
                            <a href="{{ route('area.edit', $area->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                            <form action="{{ route('area.destroy', $area->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Eliminar área? Esto borrará {{ $area->courses->count() }} curso(s) y {{ $area->teachers->count() }} profesor(es) relacionados.')">
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