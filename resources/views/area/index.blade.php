@extends('layouts.app')

@section('content')

  <h1>LISTAR AREA</h1>

    <div class ="container">
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                  
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('area.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva Area
                </a>
                @foreach ($area as $area)
                    <tr>
                        <br>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->nombre }}</td>
                      
                        {{-- <td><a href="{{ route('product.show', $product->id) }}">Mostrar</a></td> --}}

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection