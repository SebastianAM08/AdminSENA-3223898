<nav class="navbar navbar-expand-lg navbar-dark navbar-sena">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <span>Admin Sena</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('area.index') }}">Áreas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('training_center.index') }}">Centros</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('computer.index') }}">Computadores</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('course.index') }}">Cursos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('teacher.index') }}">Instructores</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('apprentice.index') }}">Aprendices</a></li>
      </ul>
    </div>
  </div>
</nav>