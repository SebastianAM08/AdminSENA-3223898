<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>admin sena</title>

    @include('includes.dependencias')

</head>

<body>

    <div class="content-wrapper">
        <!-- Navbar -->
        @include('includes.navbar')

        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @yield('content')
        </div>
    </div>




    @include('includes.footer')

    @include('includes.dependenciasbody')


</body>

</html>