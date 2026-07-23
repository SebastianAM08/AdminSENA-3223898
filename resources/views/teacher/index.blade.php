@extends('layouts.app')

@section('content')
  <h1>LISTAR Profesores</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>training_center_id</th>        
                    <th>area_id</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('teacher.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Profesor
                </a>
                @foreach ($teacher as $teacher)
                    <tr>
                        <br>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->correo}}</td>
                        <td>{{ $teacher->area_id }}</td>
                        <td>{{ $teacher->training_center_id }}</td>
                        {{-- <td><a href="{{ route('product.show', $product->id) }}">Mostrar</a></td> --}}

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection