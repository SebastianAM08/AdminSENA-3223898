@extends('layouts.app')

@section('content')
  <h1>LISTAR PRODUCTOS</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Peso</th>
                    <th>Tamaño</th>
                    <th>User_id</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('product.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
                @foreach ($products as $product)
                    <tr>
                        <br>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->cantidad }}</td>
                        <td>{{ $product->peso }}</td>
                        <td>{{ $product->tamano }}</td>
                        <td>{{ $product->user_id }}</td>
                        {{-- <td><a href="{{ route('product.show', $product->id) }}">Mostrar</a></td> --}}

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection