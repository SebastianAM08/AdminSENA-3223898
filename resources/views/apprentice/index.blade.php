@extends('layouts.app')

@section('content')
  <h1>LISTAR APRENDICES </h1>

    <div class ="container">
        <table id="idapprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>numero de telefono</th>
                    <th>course_id</th>
                    <th>computer_id</th>
                   
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('apprentice.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo aprendiz
                </a>
                @foreach ($apprentice as $apprentice)
                    <tr>
                        <br>
                        <td>{{ $apprentice->id }}</td>
                        <td>{{ $apprentice->Nombre }}</td>
                        <td>{{ $apprentice->Correo }}</td>
                        <td>{{ $apprentice->Celular}}</td>
                        <td>{{ $apprentice->course_id}}</td>
                        <td>{{ $apprentice->computer_id }}</td>
                        
                        {{-- <td><a href="{{ route('product.show', $product->id) }}">Mostrar</a></td> --}}

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection