<!-- Enlaces a los archivos CSS de Bootstrap y Fuentes Institucionales -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Estilos Institucionales SENA -->
<style>
    /* ── Tokens Institucionales SENA ─────────────────────── */
    :root {
        /* Sobrescribir variables nativas de Bootstrap */
        --bs-primary:           #39A900 !important;
        --bs-primary-rgb:       57, 169, 0 !important;
        --bs-link-color:        #39A900 !important;
        --bs-link-hover-color:  #2e8700 !important;

        /* Variables SENA */
        --sena-green:       #39A900; /* Verde SENA Institucional Oficial */
        --sena-green-hover: #2e8700; /* Verde oscuro para Hover */

        --bg-body:          #F4F6F9;
        --bg-surface:       #FFFFFF;
        --bg-surface-alt:   #EAEFF5;
        --bg-navbar:        #39A900;
        --bg-footer:        #39A900;

        --text-primary:     #2D3748;
        --text-secondary:   #6C757D;

        --accent:           var(--sena-green);
        --accent-soft:      #48C807;
        --success:          #39A900;
        --danger:           #e17055;
        --warning:          #fdcb6e;
        --info:             #0dcaf0;

        --border:           #E2E8F0;
        --border-input:     #CBD5E1;

        --radius:           .5rem;
        --radius-lg:        .75rem;
        --shadow:           0 4px 16px rgba(0, 0, 0, 0.08);
        --shadow-sm:        0 2px 6px rgba(0, 0, 0, 0.04);

        --transition:       .25s cubic-bezier(.4,0,.2,1);
    }

    /* ── Reset Global & Sticky Footer ────────────────────── */
    * { box-sizing: border-box; }

    body {
        font-family: 'Work Sans', system-ui, -apple-system, sans-serif;
        background-color: var(--bg-body);
        color: var(--text-primary);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        -webkit-font-smoothing: antialiased;
    }

    /* Garantiza que el contenido empuje el footer al fondo */
    .content-wrapper, main { 
        flex: 1; 
    }

    /* Enlaces globales (excluye botones para no sobreescribir su color) */
    a:not(.btn) { 
        color: var(--sena-green) !important; 
        text-decoration: none; 
        transition: color var(--transition); 
    }
    a:not(.btn):hover, a:not(.btn):focus { 
        color: var(--sena-green-hover) !important; 
    }

    /* Títulos generales */
    h1, h2, h3, h4, h5, h6 { 
        color: var(--sena-green); 
        font-weight: 700; 
    }

    .btn-sena-outline {
        border: 2px solid #39A900;
        color: #39A900;
        font-weight: 600;
        border-radius: 0.65rem;
        transition: all 0.25s ease;
    }

    .btn-sena-outline:hover {
        background-color: #39A900;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(57, 169, 0, 0.2);
    }

    /* Sobrescribir clases de texto e imagen de Bootstrap */
    .text-primary {
        color: var(--sena-green) !important;
    }
    .bg-primary {
        background-color: var(--sena-green) !important;
    }
    .border-primary {
        border-color: var(--sena-green) !important;
    }

  /* ── Sección Noticias y Ofertas por Centro ───────────────── */
.nav-pills-sena .nav-link {
    color: var(--text-primary, #333);
    background-color: var(--bg-surface, #fff);
    border: 1px solid var(--border, #e0e0e0);
    font-weight: 600;
    font-size: 0.9rem;
    border-radius: 20px;
    padding: 8px 18px;
    transition: all 0.25s ease;
}

.nav-pills-sena .nav-link:hover {
    background-color: #f0f0f0;
    color: #39A900;
}

.nav-pills-sena .nav-link.active {
    background-color: #39A900 !important;
    color: #ffffff !important;
    border-color: #39A900 !important;
    box-shadow: 0 4px 10px rgba(57, 169, 0, 0.25);
}

.card-noticia {
    border-radius: 1rem;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background-color: #ffffff;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    overflow: hidden;
}

.card-noticia:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}

.badge-centro {
    background-color: rgba(57, 169, 0, 0.1);
    color: #39A900;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 12px;
}

.badge-oferta {
    background-color: rgba(13, 202, 240, 0.15);
    color: #087990;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 12px;
}

    /* ── Navbar Institucional ────────────────────────────── */
    .navbar-sena {
        background-color: var(--bg-navbar) !important;
        border-bottom: 3px solid var(--sena-green-hover);
        padding: .85rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .navbar-sena .navbar-brand,
    .navbar-sena .navbar-brand * {
        color: #ffffff !important;
        font-weight: 700;
    }
    .navbar-sena .nav-link {
        color: rgba(255, 255, 255, 0.9) !important;
        font-weight: 500;
        font-size: .92rem;
        padding: .5rem .9rem !important;
        border-radius: var(--radius);
        transition: all var(--transition);
    }
    .navbar-sena .nav-link:hover,
    .navbar-sena .nav-link.active,
    .navbar-sena .nav-link:focus {
        color: #ffffff !important;
        background: rgba(255, 255, 255, 0.18) !important;
    }

    /* ── Footer Institucional ────────────────────────────── */
    .footer-sena {
        background-color: var(--bg-footer);
        color: rgba(255, 255, 255, 0.9);
        border-top: 3px solid var(--sena-green-hover);
        margin-top: auto;
    }
    .footer-sena a {
        color: rgba(255, 255, 255, 0.9) !important;
        transition: color var(--transition);
    }
    .footer-sena a:hover, .footer-sena a:focus {
        color: #ffffff !important;
        text-decoration: underline;
    }

    /* ── Footer Estilo Betowa (NUEVO) ────────────────────── */
    .footer-betowa {
        background: linear-gradient(150deg, #00b087 0%, #39A900 100%);
        color: #ffffff;
        margin-top: auto;
        position: relative;
    }

    /* Forzar que los enlaces normales dentro de este footer sean blancos */
    .footer-betowa a:not(.btn-social-icon):not(.btn-sofia-plus) {
        color: rgba(255, 255, 255, 0.9) !important;
    }
    .footer-betowa a:not(.btn-social-icon):not(.btn-sofia-plus):hover {
        color: #ffffff !important;
    }

    /* Redes Sociales */
    .footer-betowa .btn-social-icon {
        width: 32px;
        height: 32px;
        background-color: #ffffff !important;
        color: #39A900 !important;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        text-decoration: none !important;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }
    .footer-betowa .btn-social-icon:hover {
        transform: translateY(-2px);
        background-color: #f0f0f0 !important;
        color: #2e8700 !important;
    }

    /* Badges Certificaciones */
    .footer-betowa .badges-container {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 8px 12px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .footer-betowa .badge-item {
        text-align: center;
        color: #0056b3 !important;
        font-size: 0.62rem;
        font-weight: 700;
        line-height: 1.1;
        border-right: 1px solid #e0e0e0;
        padding-right: 6px;
    }
    .footer-betowa .badge-item:last-child {
        border-right: none;
        padding-right: 0;
    }
    .footer-betowa .badge-item i {
        font-size: 1.1rem;
        color: #0056b3 !important;
        display: block;
        margin-bottom: 2px;
    }

    /* Iconos Circulares de Contacto */
    .footer-betowa .contact-icon-box {
        width: 38px;
        height: 38px;
        background-color: #ffffff;
        color: #39A900 !important;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    /* Fondo Decorativo */
    .footer-betowa .footer-landscape-bg {
        width: 100%;
        height: 80px;
        background: linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 100%);
    }

    /* Barras Inferiores */
    .footer-betowa .footer-min-bar {
        background-color: rgba(0, 0, 0, 0.15);
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 0.85rem;
    }
    .footer-betowa .gov-co-bar {
        background-color: #3366CC;
        font-size: 0.9rem;
        font-weight: 700;
    }

    /* Botón Flotante SOFIA Plus */
    .btn-sofia-plus {
        position: fixed;
        bottom: 20px;
        right: 25px;
        background-color: #511A8B !important;
        color: #ffffff !important;
        padding: 8px 18px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        z-index: 1000;
        text-decoration: none !important;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }
    .btn-sofia-plus:hover {
        background-color: #3d1269 !important;
        color: #ffffff !important;
        transform: translateY(-2px);
    }

    /* ── Tarjetas (Cards) ────────────────────────────────── */
    .card, .card-sena {
        background: var(--bg-surface);
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        color: var(--text-primary);
        transition: transform var(--transition), box-shadow var(--transition);
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow);
    }

    /* ── Tablas Institucionales ───────────────────────────── */
    .table {
        --bs-table-bg: var(--bg-surface);
        --bs-table-color: var(--text-primary);
        --bs-table-border-color: var(--border);
        --bs-table-hover-bg: rgba(57, 169, 0, 0.05);
        border-radius: var(--radius);
        overflow: hidden;
        font-size: .92rem;
    }
    .table thead th {
        background: var(--sena-green);
        color: #ffffff;
        font-weight: 600;
        text-transform: uppercase;
        font-size: .78rem;
        letter-spacing: .06em;
        padding: .85rem 1rem;
        border: none;
    }
    .table tbody td {
        padding: .85rem 1rem;
        vertical-align: middle;
        border-color: var(--border);
    }

    /* ── Formularios ─────────────────────────────────────── */
    .form-control, .form-select {
        background-color: #ffffff;
        border: 1px solid var(--border-input);
        color: var(--text-primary);
        border-radius: var(--radius);
        padding: .6rem .9rem;
        transition: border-color var(--transition), box-shadow var(--transition);
    }
    .form-control:focus, .form-select:focus {
        background-color: #ffffff;
        border-color: var(--sena-green);
        color: var(--text-primary);
        box-shadow: 0 0 0 3px rgba(57, 169, 0, 0.20);
    }
    .form-control::placeholder { color: var(--text-secondary); }
    .form-label { color: var(--sena-green); font-weight: 600; font-size: .88rem; }

    /* Estilos para formularios sin clases Bootstrap */
    form label {
        color: var(--sena-green);
        font-weight: 600;
        font-size: .92rem;
        display: block;
        margin-bottom: .3rem;
    }
    form input[type="text"],
    form input[type="email"],
    form input[type="number"],
    form input[type="password"],
    form input[type="tel"],
    form textarea,
    form select {
        background-color: #ffffff;
        border: 1px solid var(--border-input);
        color: var(--text-primary);
        border-radius: var(--radius);
        padding: .6rem .9rem;
        font-family: inherit;
        font-size: .92rem;
        width: 100%;
        max-width: 420px;
        transition: border-color var(--transition), box-shadow var(--transition);
    }
    form input[type="text"]:focus,
    form input[type="email"]:focus,
    form input[type="number"]:focus,
    form input[type="password"]:focus,
    form input[type="tel"]:focus,
    form textarea:focus,
    form select:focus {
        border-color: var(--sena-green);
        outline: none;
        box-shadow: 0 0 0 3px rgba(57, 169, 0, 0.20);
    }

    /* ── Botones y Estados Hover (TEXTO E ÍCONOS SIEMPRE BLANCOS) ── */
    .btn {
        font-weight: 600;
        border-radius: var(--radius);
        transition: all var(--transition);
        font-size: .88rem;
        letter-spacing: .01em;
    }
    .btn:hover { transform: translateY(-1px); }
    .btn:active { transform: translateY(0); }

    /* Botón Principal, Verde, Éxito y Oscuro (En reposo) */
    .btn-sena, .btn-primary, .btn-success, .btn-dark,
    a.btn-sena, a.btn-primary, a.btn-success, a.btn-dark {
        background-color: var(--sena-green) !important;
        border-color: var(--sena-green) !important;
        color: #ffffff !important;
    }
    .btn-sena *, .btn-primary *, .btn-success *, .btn-dark * {
        color: #ffffff !important;
    }

    /* Al pasar el cursor (Hover), Enfocar (Focus) y Clic (Active) */
    .btn-sena:hover, .btn-sena:focus, .btn-sena:active,
    .btn-primary:hover, .btn-primary:focus, .btn-primary:active,
    .btn-success:hover, .btn-success:focus, .btn-success:active,
    .btn-dark:hover, .btn-dark:focus, .btn-dark:active,
    a.btn-sena:hover, a.btn-primary:hover, a.btn-success:hover, a.btn-dark:hover {
        background-color: var(--sena-green-hover) !important;
        border-color: var(--sena-green-hover) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(57, 169, 0, 0.3) !important;
    }
    .btn-sena:hover *, .btn-sena:focus *, .btn-sena:active *,
    .btn-primary:hover *, .btn-primary:focus *, .btn-primary:active *,
    .btn-success:hover *, .btn-success:focus *, .btn-success:active *,
    .btn-dark:hover *, .btn-dark:focus *, .btn-dark:active * {
        color: #ffffff !important;
    }

    /* Botones Outline (Transparente -> Verde con texto blanco en hover) */
    .btn-outline-primary, .btn-outline-sena,
    a.btn-outline-primary, a.btn-outline-sena {
        color: var(--sena-green) !important;
        border-color: var(--sena-green) !important;
        background-color: transparent !important;
    }
    .btn-outline-primary *, .btn-outline-sena * {
        color: var(--sena-green) !important;
    }

    .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active,
    .btn-outline-sena:hover, .btn-outline-sena:focus, .btn-outline-sena:active,
    a.btn-outline-primary:hover, a.btn-outline-sena:hover {
        background-color: var(--sena-green) !important;
        border-color: var(--sena-green) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(57, 169, 0, 0.3) !important;
    }
    .btn-outline-primary:hover *, .btn-outline-primary:focus *, .btn-outline-primary:active *,
    .btn-outline-sena:hover *, .btn-outline-sena:focus *, .btn-outline-sena:active * {
        color: #ffffff !important;
    }

    .btn-secondary {
        background: #E2E8F0 !important;
        border-color: #CBD5E1 !important;
        color: var(--text-primary) !important;
    }
    .btn-secondary:hover {
        background: #CBD5E1 !important;
        color: #000000 !important;
    }

    /* ── Alertas ─────────────────────────────────────────── */
    .alert-success {
        background: rgba(57, 169, 0, 0.12);
        border: 1px solid rgba(57, 169, 0, 0.3);
        color: var(--sena-green-hover);
        border-radius: var(--radius);
    }

    /* ── Títulos de sección ──────────────────────────────── */
    .container > h1 {
        font-size: 1.65rem;
        font-weight: 700;
        margin-bottom: 1.25rem;
        padding-bottom: .75rem;
        border-bottom: 2px solid var(--sena-green);
        color: var(--sena-green);
    }

    /* ── Scrollbar & Selección ────────────────────────────── */
    ::-webkit-scrollbar { width: 8px; height: 8px; }
    ::-webkit-scrollbar-track { background: var(--bg-body); }
    ::-webkit-scrollbar-thumb { background: #CBD5E1; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: var(--text-secondary); }

    ::-selection { background: rgba(57, 169, 0, 0.25); color: var(--sena-green); }

    /* ── Animaciones ────────────────────────────────────── */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(12px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .container { animation: fadeInUp .4s ease-out; }
</style>