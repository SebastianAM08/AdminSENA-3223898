<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sena</title>
    @include('includes.dependencias')
    <style>
        body {
            background: linear-gradient(160deg, #0f1117 0%, #1a1d27 40%, #1e1636 100%);
            color: #e4e6ef;
            min-height: 100vh;
        }
        .hero {
            min-height: 80vh;
        }
        .card-custom {
            background: rgba(26,29,39,.75);
            border: 1px solid rgba(255,255,255,.06);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 1rem;
            transition: transform .3s ease, box-shadow .3s ease;
        }
        .card-custom:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(108,92,231,.15);
        }
        .section-title {
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--accent-soft, #a29bfe);
            font-size: .85rem;
            font-weight: 600;
        }
        .text-white-75 { color: rgba(228,230,239,.65) !important; }
        .glow-accent {
            text-shadow: 0 0 40px rgba(108,92,231,.25);
        }
        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(108,92,231,.12);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: .75rem;
            color: var(--accent-soft, #a29bfe);
            font-size: 1.25rem;
        }
        .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
        }
        .stat-label {
            font-size: .78rem;
            color: var(--text-secondary, #8b8fa3);
            text-transform: uppercase;
            letter-spacing: .06em;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .hero-card { animation: float 6s ease-in-out infinite; }

        /* Orb decorativo */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: .12;
            pointer-events: none;
            z-index: 0;
        }
        .orb-1 { width: 400px; height: 400px; background: #6c5ce7; top: -100px; right: -100px; }
        .orb-2 { width: 300px; height: 300px; background: #a29bfe; bottom: -50px; left: -80px; }
    </style>
</head>
<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    @include('includes.navbar')

    <main class="container py-5 hero position-relative" style="z-index:1;">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8">
                <p class="section-title mb-3">Portal administrativo</p>
                <h1 class="display-5 fw-bold glow-accent">Admin Sena</h1>
                <p class="lead text-white-75">Gestiona cursos, instructores, aprendices y centros de formación con una interfaz simple y moderna.</p>
                <div class="d-flex justify-content-center gap-2 mt-4">
                    <a href="{{ route('course.index') }}" class="btn btn-sena btn-lg">Ver cursos</a>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-outline-light btn-lg">Ver aprendices</a>
                </div>
            </div>
        </div>

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
    </main>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
