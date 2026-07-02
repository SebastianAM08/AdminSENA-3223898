@extends('layouts.app')

@section('content')


    <h1>Formulario Computador</h1>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="number" name="number">
        </label>
        <br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand">
        </label>
        <br>
        <br>

        <button type="submit"> Crear Computador</button>

    </form>
@endsection