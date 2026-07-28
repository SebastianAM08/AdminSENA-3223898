<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sena</title>
    @include('includes.dependencias')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
            color: #ffffff;
            min-height: 100vh;
        }
        .hero {
            min-height: 80vh;
        }
        .card-custom {
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.18);
            backdrop-filter: blur(10px);
        }
        .section-title {
            letter-spacing: .14em;
            text-transform: uppercase;
            opacity: .85;
        }
        .btn-sena { font-weight: 600; }
    </style>
</head>
<body>
    @include('includes.navbar')

    <main class="container py-5 hero">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="section-title mb-3">Portal administrativo</p>
                <h1 class="display-5 fw-bold">Admin Sena</h1>
                <p class="lead text-white-75">Gestiona cursos, instructores, aprendices y centros de formación con una interfaz simple y moderna.</p>
                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('course.index') }}" class="btn btn-sena btn-lg">Ver cursos</a>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-outline-light btn-lg">Ver aprendices</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="card card-custom p-4 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded mb-3" alt="Aprendices">
                    <div class="row text-white-75">
                        <div class="col-6">
                            <div class="mb-3">
                                <h5 class="mb-0">Cursos</h5>
                                <small>Gestiona tu oferta académica</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <h5 class="mb-0">Aprendices</h5>
                                <small>Controla inscripciones y avances</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5 text-white-75">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="card card-custom p-4 h-100">
                        <h5 class="fw-semibold">Interfaz moderna</h5>
                        <p>Diseño Bootstrap claro, accesible y listo para usar desde cualquier dispositivo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-4 h-100">
                        <h5 class="fw-semibold">Datos en tiempo real</h5>
                        <p>Administra áreas, centros, cursos, profesores y aprendices en un solo sitio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-4 h-100">
                        <h5 class="fw-semibold">Navegación fácil</h5>
                        <p>Menú superior intuitivo para moverte rápido entre las secciones principales.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <span>© {{ date('Y') }} Admin Sena</span>
            <div>
                <a href="#" class="text-white text-decoration-none me-3">Contacto</a>
                <a href="#" class="text-white text-decoration-none">Soporte</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
