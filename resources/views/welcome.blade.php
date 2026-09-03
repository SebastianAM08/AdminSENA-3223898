<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sena</title>
    @include('includes.dependencias')

    <!-- Tipografía institucional -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --sena-green: #39A900;
            --sena-green-hover: #2e8700;
            --sena-gray-bg: #F4F6F9;
            --sena-text: #2D3748;
            --sena-text-muted: #6C757D;
        }

        /* --- CLAVE PARA EL FOOTER ABAJO --- */
        body {
            font-family: 'Work Sans', sans-serif;
            background-color: var(--sena-gray-bg);
            color: var(--sena-text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Hace que el contenido principal ocupe todo el espacio libre */
        main {
            flex: 1;
        }
        /* --------------------------------- */

        .hero {
            padding: 4rem 0 2rem;
        }

        /* Badge institucional superior */
        .sena-badge {
            background-color: rgba(57, 169, 0, 0.1);
            color: var(--sena-green);
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            display: inline-block;
        }

        .hero-title {
            color: var(--sena-green);
            font-weight: 700;
        }

        .hero-title span {
            color: var(--sena-green-hover);
        }

        /* Botones oficiales */
        .btn-sena {
            background-color: var(--sena-green);
            color: #ffffff;
            font-weight: 600;
            border: none;
            padding: 0.75rem 1.75rem;
            border-radius: 0.5rem;
            transition: all 0.25s ease;
        }

        .btn-sena:hover {
            background-color: var(--sena-green-hover);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(57, 169, 0, 0.3);
        }

        .btn-outline-sena {
            border: 2px solid var(--sena-green);
            color: var(--sena-green);
            font-weight: 600;
            padding: 0.75rem 1.75rem;
            border-radius: 0.5rem;
            transition: all 0.25s ease;
        }

        .btn-outline-sena:hover {
            background-color: var(--sena-green);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(57, 169, 0, 0.3);
        }

        /* Tarjetas estilo institucional */
        .card-custom {
            background: #ffffff;
            border: 1px solid #E2E8F0;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            position: relative;
            overflow: hidden;
        }

        .card-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--sena-green);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(57, 169, 0, 0.12);
            border-color: rgba(57, 169, 0, 0.3);
        }

        .card-custom:hover::before {
            opacity: 1;
        }

        .card-custom h5 {
            color: var(--sena-green);
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background: rgba(57, 169, 0, 0.1);
            color: var(--sena-green);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            font-size: 1.5rem;
        }

        /* Decoración de fondo tenue */
        .bg-pattern {
            position: absolute;
            top: 0;
            right: 0;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(57,169,0,0.06) 0%, rgba(255,255,255,0) 70%);
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>
<body>
    <div class="bg-pattern"></div>

    @include('includes.navbar')

    <main class="container hero position-relative" style="z-index:1;">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8">
                <span class="sena-badge mb-3">Portal Administrativo</span>
                <h1 class="display-5 hero-title mb-3">Admin <span>SENA</span></h1>
                <p class="lead text-muted mb-4">Gestiona cursos, instructores, aprendices y centros de formación con una interfaz ágil, moderna e institucional.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('course.index') }}" class="btn btn-sena btn-lg">
                        <i class="bi bi-journal-bookmark me-2"></i>Ver Cursos
                    </a>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-outline-sena btn-lg">
                        <i class="bi bi-people me-2"></i>Ver Aprendices
                    </a>
                </div>
            </div>
        </div>

        <section class="mt-5 pt-4">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="card card-custom p-4 h-100">
                        <div class="feature-icon">
                            <i class="bi bi-display"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Interfaz Moderna</h5>
                        <p class="text-muted mb-0">Diseño intuitivo, accesible y optimizado para usarse desde cualquier dispositivo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-4 h-100">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Datos en Tiempo Real</h5>
                        <p class="text-muted mb-0">Administra áreas, centros, cursos, instructores y aprendices centralizadamente.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-4 h-100">
                        <div class="feature-icon">
                            <i class="bi bi-signpost-split"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Navegación Fácil</h5>
                        <p class="text-muted mb-0">Acceso rápido mediante un menú organizado para moverte sin complicaciones.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>