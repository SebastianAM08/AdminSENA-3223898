@extends('layouts.app')

@section('content')


    <h1>Formulario Curso</h1>

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número Curso:
            <br>
            <input type="number" name="course_number">
        </label>
        <br>

        <label>
            Día:
            <br>
            <input type="text" name="day">
        </label>
        <br>
        <br>

        {{--{{$area}}--}}

        <label for="area_id"> area</label>

        <select name="area_id" id="area_id" class= "form-control">>
             <option value="">seleccione un area</option>

            @foreach($areas as $area)

                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>

            @endforeach

        </select>
        <br>
        <br>

         {{--{{$training_centers}}--}}

        <label for="training_center_id"> Centro Formación</label>

       <select name="training_center_id" id="training_center_id" class= "form-control">
          <option value="">seleccione un centro de formación</option>

            @foreach($training_centers as $training_center)

                <option value="{{ $training_center->id }}">
                    {{ $training_center->name
                    
                    }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit"> Crear Curso </button>

    </form>
@endsection