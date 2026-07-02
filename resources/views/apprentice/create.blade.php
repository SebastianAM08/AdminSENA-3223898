
@extends('layouts.app')

@section('content')

    <h1>Formulario Aprendiz</h1>

    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">

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

        <label>
            Celular:
            <br>
            <input type="text" name="cell_number">
        </label>
        <br>
        

         {{--{{$courses}}--}}

        <label for="course_id"> Curso </label>

        <select name="course_id" id="course_id" class= "form-control">
            <option value="">Seleccione un curso </option>

            @foreach($courses as $course)

                <option value="{{ $course->id }}">
                    {{ $course->course_number }}
                </option>

            @endforeach

        </select>
        <br>
        <br>

         {{--{{$computers}}--}}

        <label for="computer_id"> Computador </label>

        <select name="computer_id" id="computer_id" class= "form-control">
            <option value=""> Seleccione un computador</option>

            @foreach($computers as $computer)

                <option value="{{ $computer->id }}">
                    {{ $computer->number }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">  Crear Aprendiz </button>

    </form>
@endsection