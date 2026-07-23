@extends('layouts.app')

@section('content')
  <h1>LISTAR CENTROS DE FORMACION</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                   
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('training_center.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Centro de formacion
                </a>
                @foreach ($training_center as  $training_center)
                    <tr>
                        <br>
                        <td>{{ $training_center->id }}</td>
                        <td>{{ $training_center->nombre }}</td>
                        <td>{{ $training_center->Ubicación }}</td>
                        
                        {{-- <td><a href="{{ route('product.show', $product->id) }}">Mostrar</a></td> --}}

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection