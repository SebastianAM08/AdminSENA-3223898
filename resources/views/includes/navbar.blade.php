<nav class="navbar navbar-expand-lg navbar-sena">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA" width="38" height="38" class="d-inline-block align-text-top bg-white p-1 rounded-circle object-fit-contain">
            <span class="fw-bold">Admin Sena</span>
        </a>

        <!-- Botón Hamburguesa -->
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSenaContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú Principal (con collapse wrapper) -->
        <div class="collapse navbar-collapse" id="navbarSenaContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1">
                @auth
                    {{-- Solo se muestra si el usuario inició sesión Y su rol es 'admin' --}}
                    @if(Auth::user()->isAdmin())
                        <li class="nav-item"><a class="nav-link" href="{{ route('area.index') }}">Áreas</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('training_center.index') }}">Centros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('computer.index') }}">Computadores</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('course.index') }}">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('teacher.index') }}">Instructores</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('apprentice.index') }}">Aprendices</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                    @endif
                @endauth
            </ul>

            <!-- Sección de Usuario / Iniciar Sesión -->
            <ul class="navbar-nav align-items-center gap-2">
                @guest
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-light btn-sm px-3 rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-1"></i> Iniciar Sesión
                        </button>
                    </li>
                @endguest

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                            <span class="badge ms-1 {{ Auth::user()->isAdmin() ? 'bg-light text-success' : 'bg-light text-info' }}" style="font-size: .65rem; vertical-align: middle;">
                                {{ strtoupper(Auth::user()->role) }}
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger fw-semibold">
                                        <i class="fas fa-sign-out-alt me-1"></i> Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Incluir el modal desde la carpeta auth -->
@include('auth.login-modal')