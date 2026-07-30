<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root{
            --accent: #6c5ce7;
            --accent-soft: #a29bfe;
            --bg-navbar: #12141c;
            --bg-footer: #0c0e14;
            --text-secondary: #8b8fa3;
            --border: rgba(255,255,255,0.06);
            --transition: .25s cubic-bezier(.4,0,.2,1);
            --radius: .65rem;
        }
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: linear-gradient(160deg, #0f1117 0%, #1a1d27 40%, #1e1636 100%);
            color: #e4e6ef;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }
        .hero { min-height: 80vh; }
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
            color: var(--accent-soft);
            font-size: .85rem;
            font-weight: 600;
        }
        .text-white-75 { color: rgba(228,230,239,.65) !important; }
        .glow-accent { text-shadow: 0 0 40px rgba(108,92,231,.25); }
        .btn-sena {
            background: var(--accent);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: var(--radius);
            transition: all var(--transition);
        }
        .btn-sena:hover {
            background: var(--accent-soft);
            color: #fff;
            box-shadow: 0 4px 14px rgba(108,92,231,.35);
            transform: translateY(-1px);
        }
        .btn-outline-light {
            border-color: rgba(255,255,255,.25);
            color: rgba(255,255,255,.85);
            border-radius: var(--radius);
            transition: all var(--transition);
        }
        .btn-outline-light:hover {
            background: rgba(255,255,255,.08);
            border-color: rgba(255,255,255,.4);
            color: #fff;
        }
        .feature-icon {
            width: 48px; height: 48px;
            border-radius: 12px;
            background: rgba(108,92,231,.12);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: .75rem;
            color: var(--accent-soft);
            font-size: 1.25rem;
        }
        .stat-number { font-size: 1.5rem; font-weight: 700; color: #fff; }
        .stat-label { font-size: .78rem; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .06em; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .hero-card { animation: float 6s ease-in-out infinite; }
        .orb {
            position: fixed; border-radius: 50%;
            filter: blur(80px); opacity: .12;
            pointer-events: none; z-index: 0;
        }
        .orb-1 { width: 400px; height: 400px; background: #6c5ce7; top: -100px; right: -100px; }
        .orb-2 { width: 300px; height: 300px; background: #a29bfe; bottom: -50px; left: -80px; }
        /* Navbar */
        .navbar-dark.bg-dark { background-color: var(--bg-navbar) !important; border-bottom: 1px solid var(--border); }
        .navbar-dark .nav-link { color: var(--text-secondary) !important; font-weight: 500; font-size: .9rem; border-radius: var(--radius); transition: all var(--transition); padding: .5rem .9rem !important; }
        .navbar-dark .nav-link:hover { color: #fff !important; background: rgba(108,92,231,.15); }
        /* Footer */
        footer.bg-dark { background-color: var(--bg-footer) !important; border-top: 1px solid var(--border); }
        footer a { color: var(--text-secondary) !important; transition: color var(--transition); }
        footer a:hover { color: var(--accent-soft) !important; }
        ::selection { background: rgba(108,92,231,.35); color: #fff; }
        @keyframes fadeInUp { from{opacity:0;transform:translateY(12px);} to{opacity:1;transform:translateY(0);} }
        .container { animation: fadeInUp .4s ease-out; }
    </style>
</head>
<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Admin Sena</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('area.index') }}">Áreas</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('training_center.index') }}">Centros</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('course.index') }}">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('teacher.index') }}">Profesores</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('apprentice.index') }}">Aprendices</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('computer.index') }}">Computadoras</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5 hero position-relative" style="z-index:1;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="section-title mb-3">Portal administrativo</p>
                <h1 class="display-5 fw-bold glow-accent">Admin Sena</h1>
                <p class="lead text-white-75">Gestiona cursos, instructores, aprendices y centros de formación con una interfaz simple y moderna.</p>
                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('course.index') }}" class="btn btn-sena btn-lg">Ver cursos</a>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-outline-light btn-lg">Ver aprendices</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="card card-custom p-4 shadow-lg hero-card">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded mb-3" alt="Aprendices" style="border-radius:.75rem !important;">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <div class="stat-number">Cursos</div>
                                <div class="stat-label">Gestiona tu oferta académica</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 text-center">
                                <div class="stat-number">Aprendices</div>
                                <div class="stat-label">Controla inscripciones y avances</div>
                            </div>
                        </div>
                    </div>
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
