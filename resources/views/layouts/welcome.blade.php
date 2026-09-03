@extends('layouts.app')

@section('content')

    <main class="py-5 hero position-relative" style="z-index:1;">

        {{-- ═══════════════════════════════════════════════════════ --}}
        {{-- GUEST — No autenticado                                  --}}
        {{-- ═══════════════════════════════════════════════════════ --}}
        @guest
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                    <p class="section-title mb-3">Portal administrativo</p>
                    <h1 class="display-5 fw-bold glow-accent">Admin SENA</h1>
                    <p class="lead text-white-75">Gestiona cursos, instructores, aprendices y centros de formación con una interfaz simple y moderna.</p>
                    <div class="mt-4">
                        <button type="button" class="btn btn-sena btn-lg px-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tarjetas informativas -->
            <section class="mt-5">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="card card-custom p-4 h-100">
                            <div class="feature-icon"><i class="bi bi-display"></i></div>
                            <h5 class="fw-semibold">Interfaz moderna</h5>
                            <p class="text-white-75 mb-0">Diseño accesible y listo para usar desde cualquier dispositivo.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom p-4 h-100">
                            <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                            <h5 class="fw-semibold">Datos en tiempo real</h5>
                            <p class="text-white-75 mb-0">Administra áreas, centros, cursos, profesores y aprendices en un solo sitio.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom p-4 h-100">
                            <div class="feature-icon"><i class="bi bi-signpost-split"></i></div>
                            <h5 class="fw-semibold">Navegación fácil</h5>
                            <p class="text-white-75 mb-0">Menú superior intuitivo para moverte rápido entre las secciones principales.</p>
                        </div>
                    </div>
                </div>
            </section>
        @endguest

        {{-- ═══════════════════════════════════════════════════════ --}}
        {{-- ADMIN — Usuario autenticado con rol admin               --}}
        {{-- ═══════════════════════════════════════════════════════ --}}
        @auth
            @if(Auth::user()->isAdmin())
                <div class="row align-items-center justify-content-center text-center mb-4">
                    <div class="col-lg-8">
                        <div class="d-inline-block mb-3" style="background: rgba(57,169,0,0.12); padding: 6px 18px; border-radius: 50px;">
                            <i class="fas fa-shield-alt me-1" style="color: var(--sena-green);"></i>
                            <span class="fw-bold small" style="color: var(--sena-green); letter-spacing: .05em; text-transform: uppercase;">Administrador</span>
                        </div>
                        <h1 class="display-5 fw-bold glow-accent mb-2">¡Bienvenido, {{ Auth::user()->name }}!</h1>
                        <p class="lead text-white-75">Panel de administración — Tienes acceso completo a todos los módulos del sistema.</p>
                    </div>
                </div>

                <!-- Dashboard de accesos rápidos -->
                <section class="mt-3">
                    <div class="row gy-4">
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('area.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-diagram-3"></i></div>
                                    <h5 class="fw-semibold mb-1">Áreas</h5>
                                    <p class="text-white-75 mb-0 small">Gestionar áreas de formación</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('training_center.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-building"></i></div>
                                    <h5 class="fw-semibold mb-1">Centros</h5>
                                    <p class="text-white-75 mb-0 small">Centros de formación</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('computer.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-pc-display"></i></div>
                                    <h5 class="fw-semibold mb-1">Computadores</h5>
                                    <p class="text-white-75 mb-0 small">Inventario de equipos</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('course.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-journal-bookmark"></i></div>
                                    <h5 class="fw-semibold mb-1">Cursos</h5>
                                    <p class="text-white-75 mb-0 small">Programas formativos</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('teacher.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-person-badge"></i></div>
                                    <h5 class="fw-semibold mb-1">Instructores</h5>
                                    <p class="text-white-75 mb-0 small">Personal docente</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('apprentice.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-people"></i></div>
                                    <h5 class="fw-semibold mb-1">Aprendices</h5>
                                    <p class="text-white-75 mb-0 small">Registro de estudiantes</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('users.index') }}" class="text-decoration-none">
                                <div class="card card-custom p-4 h-100 text-center">
                                    <div class="feature-icon mx-auto"><i class="bi bi-gear"></i></div>
                                    <h5 class="fw-semibold mb-1">Usuarios</h5>
                                    <p class="text-white-75 mb-0 small">Gestión de roles</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

            @else
                {{-- ═══════════════════════════════════════════════════════ --}}
                {{-- USER — Usuario autenticado con rol user                 --}}
                {{-- ═══════════════════════════════════════════════════════ --}}
                <div class="row align-items-center justify-content-center text-center mb-4">
                    <div class="col-lg-8">
                        <div class="d-inline-block mb-3" style="background: rgba(13,202,240,0.12); padding: 6px 18px; border-radius: 50px;">
                            <i class="fas fa-user me-1" style="color: #0dcaf0;"></i>
                            <span class="fw-bold small" style="color: #0dcaf0; letter-spacing: .05em; text-transform: uppercase;">Usuario</span>
                        </div>
                        <h1 class="display-5 fw-bold glow-accent mb-2">¡Hola, {{ Auth::user()->name }}!</h1>
                        <p class="lead text-white-75">Bienvenido al portal Admin SENA. Tu cuenta tiene acceso de usuario estándar.</p>
                    </div>
                </div>

                <!-- Información para el usuario -->
                <section class="mt-3">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-custom p-4 h-100 text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <h5 class="fw-semibold mb-2">Acceso Limitado</h5>
                                <p class="text-white-75 mb-0 small">Actualmente tu cuenta tiene el rol de <strong>Usuario</strong>. Para acceder a los módulos de administración, un administrador debe asignarte el rol correspondiente.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-custom p-4 h-100 text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                                <h5 class="fw-semibold mb-2">Noticias y Ofertas</h5>
                                <p class="text-white-75 mb-0 small">Explora las noticias y ofertas educativas del SENA disponibles en la sección inferior de esta página.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-custom p-4 h-100 text-center">
                                <div class="feature-icon mx-auto">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <h5 class="fw-semibold mb-2">Tu Perfil</h5>
                                <p class="text-white-75 mb-0 small">
                                    <strong>Nombre:</strong> {{ Auth::user()->name }}<br>
                                    <strong>Correo:</strong> {{ Auth::user()->email }}<br>
                                    <strong>Rol:</strong> {{ ucfirst(Auth::user()->role) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endauth

    </main>

    <!-- Sección de Noticias solo para la página de inicio -->
    @include('includes.noticias')

@endsection