 <!-- Enlaces a los archivos CSS de Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   <!-- Dark theme – tonos oscuros y suaves -->
   <style>
      /* ── Tokens ─────────────────────────────────────────── */
      :root{
         --bg-body:    #0f1117;
         --bg-surface: #1a1d27;
         --bg-surface-alt: #22263a;
         --bg-navbar:  #12141c;
         --bg-footer:  #0c0e14;

         --text-primary:   #e4e6ef;
         --text-secondary: #8b8fa3;

         --accent:      #6c5ce7;
         --accent-soft:  #a29bfe;
         --success:      #00b894;
         --success-dark: #00a381;
         --danger:       #e17055;
         --danger-dark:  #c0553e;
         --warning:      #fdcb6e;
         --info:         #74b9ff;

         --border:       rgba(255,255,255,0.06);
         --border-input: rgba(255,255,255,0.10);

         --radius:  .65rem;
         --radius-lg: 1rem;
         --shadow:  0 4px 24px rgba(0,0,0,.35);
         --shadow-sm: 0 2px 8px rgba(0,0,0,.25);

         --transition: .25s cubic-bezier(.4,0,.2,1);
      }

      /* ── Global reset ───────────────────────────────────── */
      *{ box-sizing: border-box; }

      body{
         font-family: 'Inter', system-ui, -apple-system, sans-serif;
         background-color: var(--bg-body);
         color: var(--text-primary);
         min-height: 100vh;
         display: flex;
         flex-direction: column;
         -webkit-font-smoothing: antialiased;
      }

      /* Sticky footer: el contenido principal crece para empujar el footer abajo */
      .content-wrapper{ flex: 1; }

      a{ color: var(--accent-soft); transition: color var(--transition); }
      a:hover{ color: #fff; }

      h1, h2, h3, h4, h5, h6{ color: var(--text-primary); font-weight: 600; }

      /* ── Navbar ──────────────────────────────────────────── */
      .navbar-sena{
         background-color: var(--bg-navbar) !important;
         border-bottom: 1px solid var(--border);
         backdrop-filter: blur(12px);
         -webkit-backdrop-filter: blur(12px);
         padding: .85rem 0;
      }
      .navbar-sena .navbar-brand,
      .navbar-sena .navbar-brand *{
         color: #ffffff !important;
         font-weight: 700;
         letter-spacing: -.02em;
      }
      .navbar-sena .nav-link{
         color: var(--text-secondary) !important;
         text-transform: capitalize;
         font-weight: 500;
         font-size: .9rem;
         padding: .5rem .9rem !important;
         border-radius: var(--radius);
         transition: all var(--transition);
      }
      .navbar-sena .nav-link:hover,
      .navbar-sena .nav-link.active{
         color: #ffffff !important;
         background: rgba(108,92,231,.15);
      }

      /* ── Footer ──────────────────────────────────────────── */
      .footer-sena{
         background-color: var(--bg-footer);
         color: var(--text-secondary);
         border-top: 1px solid var(--border);
      }
      .footer-sena a{
         color: var(--text-secondary) !important;
         transition: color var(--transition);
      }
      .footer-sena a:hover{
         color: var(--accent-soft) !important;
      }

      /* ── Cards ───────────────────────────────────────────── */
      .card, .card-sena{
         background: var(--bg-surface);
         border: 1px solid var(--border);
         border-radius: var(--radius-lg);
         box-shadow: var(--shadow-sm);
         color: var(--text-primary);
         transition: transform var(--transition), box-shadow var(--transition);
      }
      .card:hover{
         transform: translateY(-2px);
         box-shadow: var(--shadow);
      }

      /* ── Tables ──────────────────────────────────────────── */
      .table{
         --bs-table-bg: var(--bg-surface);
         --bs-table-color: var(--text-primary);
         --bs-table-border-color: var(--border);
         --bs-table-striped-bg: var(--bg-surface-alt);
         --bs-table-striped-color: var(--text-primary);
         --bs-table-hover-bg: rgba(108,92,231,.08);
         --bs-table-hover-color: #fff;
         border-radius: var(--radius);
         overflow: hidden;
         font-size: .92rem;
      }
      .table thead th{
         background: var(--bg-surface-alt);
         color: var(--text-secondary);
         font-weight: 600;
         text-transform: uppercase;
         font-size: .78rem;
         letter-spacing: .06em;
         border-bottom: 2px solid var(--border) !important;
         padding: .85rem 1rem;
      }
      .table tbody td{
         padding: .75rem 1rem;
         vertical-align: middle;
         border-color: var(--border);
      }

      /* ── Forms ───────────────────────────────────────────── */
      .form-control, .form-select{
         background-color: var(--bg-surface-alt);
         border: 1px solid var(--border-input);
         color: var(--text-primary);
         border-radius: var(--radius);
         padding: .6rem .9rem;
         transition: border-color var(--transition), box-shadow var(--transition);
      }
      .form-control:focus, .form-select:focus{
         background-color: var(--bg-surface);
         border-color: var(--accent);
         color: var(--text-primary);
         box-shadow: 0 0 0 3px rgba(108,92,231,.20);
      }
      .form-control::placeholder{ color: var(--text-secondary); }
      .form-label{ color: var(--text-secondary); font-weight: 500; font-size: .88rem; }

      /* Formularios "create" sin clases Bootstrap */
      form label{
         color: var(--text-secondary);
         font-weight: 500;
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
      form select{
         background-color: var(--bg-surface-alt);
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
      form select:focus{
         background-color: var(--bg-surface);
         border-color: var(--accent);
         outline: none;
         box-shadow: 0 0 0 3px rgba(108,92,231,.20);
      }
      form button[type="submit"]{
         background: var(--accent);
         color: #fff;
         border: none;
         border-radius: var(--radius);
         padding: .6rem 1.6rem;
         font-family: inherit;
         font-weight: 600;
         font-size: .92rem;
         cursor: pointer;
         transition: all var(--transition);
      }
      form button[type="submit"]:hover{
         background: var(--accent-soft);
         transform: translateY(-1px);
         box-shadow: 0 4px 14px rgba(108,92,231,.35);
      }

      /* ── Buttons ─────────────────────────────────────────── */
      .btn{
         font-weight: 500;
         border-radius: var(--radius);
         transition: all var(--transition);
         font-size: .88rem;
         letter-spacing: .01em;
      }
      .btn:hover{ transform: translateY(-1px); }
      .btn:active{ transform: translateY(0); }

      .btn-sena{
         background: var(--accent);
         color: #fff;
         font-weight: 600;
         border: none;
      }
      .btn-sena:hover{
         background: var(--accent-soft);
         color: #fff;
         box-shadow: 0 4px 14px rgba(108,92,231,.35);
      }

      .btn-success{
         background: var(--success) !important;
         border-color: var(--success) !important;
         color: #fff !important;
      }
      .btn-success:hover{
         background: var(--success-dark) !important;
         border-color: var(--success-dark) !important;
         box-shadow: 0 4px 14px rgba(0,184,148,.30);
      }

      .btn-primary{
         background: var(--accent) !important;
         border-color: var(--accent) !important;
      }
      .btn-primary:hover{
         background: var(--accent-soft) !important;
         border-color: var(--accent-soft) !important;
         box-shadow: 0 4px 14px rgba(108,92,231,.30);
      }

      .btn-secondary{
         background: var(--bg-surface-alt) !important;
         border-color: var(--border-input) !important;
         color: var(--text-primary) !important;
      }
      .btn-secondary:hover{
         background: rgba(255,255,255,.08) !important;
         border-color: rgba(255,255,255,.15) !important;
         color: #fff !important;
      }

      .btn-danger{
         background: var(--danger) !important;
         border-color: var(--danger) !important;
      }
      .btn-danger:hover{
         background: var(--danger-dark) !important;
         border-color: var(--danger-dark) !important;
         box-shadow: 0 4px 14px rgba(225,112,85,.30);
      }

      .btn-outline-light{
         border-color: rgba(255,255,255,.25);
         color: rgba(255,255,255,.85);
      }
      .btn-outline-light:hover{
         background: rgba(255,255,255,.08);
         border-color: rgba(255,255,255,.4);
         color: #fff;
      }

      /* ── Alerts ──────────────────────────────────────────── */
      .alert-success{
         background: rgba(0,184,148,.12);
         border: 1px solid rgba(0,184,148,.25);
         color: var(--success);
         border-radius: var(--radius);
      }

      /* ── Section titles (pages) ──────────────────────────── */
      .container > h1{
         font-size: 1.65rem;
         font-weight: 700;
         margin-bottom: 1.25rem;
         padding-bottom: .75rem;
         border-bottom: 2px solid var(--border);
         color: var(--text-primary);
      }

      /* ── Scrollbar ───────────────────────────────────────── */
      ::-webkit-scrollbar{ width: 8px; height: 8px; }
      ::-webkit-scrollbar-track{ background: var(--bg-body); }
      ::-webkit-scrollbar-thumb{ background: var(--bg-surface-alt); border-radius: 4px; }
      ::-webkit-scrollbar-thumb:hover{ background: var(--text-secondary); }

      /* ── Selection ───────────────────────────────────────── */
      ::selection{ background: rgba(108,92,231,.35); color: #fff; }

      /* ── Micro-animations ────────────────────────────────── */
      @keyframes fadeInUp{
         from{ opacity:0; transform:translateY(12px); }
         to{ opacity:1; transform:translateY(0); }
      }
      .container{ animation: fadeInUp .4s ease-out; }
   </style>
