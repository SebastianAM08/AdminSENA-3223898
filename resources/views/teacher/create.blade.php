
@extends('layouts.app')

@section('content')
    <h1>Formulario Teacher</h1>

    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Correo:
            <br>
            <input type="email" name="email">
        </label>
        <br>
        <br>
        
          {{--{{$area}}--}}

        <label for="area_id"> area</label>

        <select name="area_id" id="area_id" class= "form-control">
            <option value=""> Seleccione un area</option>

            @foreach($areas as $area)

                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>

            @endforeach

        </select>
        <br>
        <br>

        <label for="training_center_id" >Centro Formación</label>

        <select name="training_center_id" id="training_center_id" class= "form-control">
            <option value="">Seleccione un Centro Formación</option>

            @foreach($training_centers as $training_centers)

                <option value="{{ $training_centers->id }}">
                    {{ $training_centers->name }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">Crear Teacher </button>

    </form>
@endsection