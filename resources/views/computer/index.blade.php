@extends('layouts.app')

@section('content')
    <h1>LISTAR COMPUTADORAS</h1>

    <div class="container">
        <table id="idComputer" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Número</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva Computadora
                </a>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td>
                            <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-sm btn-primary">Mostrar</a>
                            <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Eliminar computadora?')">
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