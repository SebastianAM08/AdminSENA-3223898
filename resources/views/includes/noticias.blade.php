<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        
        <!-- Encabezado de Sección -->
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2">Noticias y Ofertas Educativas</h2>
            <p class="text-muted">Entérate de las últimas novedades y convocatorias según tu centro de formación</p>
        </div>

        <!-- Filtro por Centros (Pestañas/Tabs) -->
        <ul class="nav nav-pills nav-pills-sena justify-content-center gap-2 mb-4" id="centrosTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="todos-tab" data-bs-toggle="pill" data-bs-target="#tab-todos" type="button" role="tab">
                    <i class="fas fa-th-large me-1"></i> Todos
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="comercio-tab" data-bs-toggle="pill" data-bs-target="#tab-comercio" type="button" role="tab">
                    <i class="fas fa-store me-1"></i> Centro de Comercio y Servicios
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="teleinfo-tab" data-bs-toggle="pill" data-bs-target="#tab-teleinfo" type="button" role="tab">
                    <i class="fas fa-laptop-code me-1"></i> Centro de Teleinformática
                </button>
            </li>
        </ul>

        <!-- Contenido de las Pestañas -->
        <div class="tab-content" id="centrosTabContent">
            
            <!-- PESTAÑA: TODOS -->
            <div class="tab-pane fade show active" id="tab-todos" role="tabpanel">
                <div class="row g-4">
                    <!-- Tarjeta 1: Oferta Teleinformática -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-noticia h-100 p-3 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge-centro">Teleinformática</span>
                                    <span class="badge-oferta"><i class="fas fa-graduation-cap me-1"></i> Convocatoria</span>
                                </div>
                                <h5 class="fw-bold fs-6 text-dark mt-2 mb-2">Técnico en Programación de Software</h5>
                                <p class="small text-secondary mb-3">Abierta nueva cohorte presencial. Requisitos: Nivel educativo básico y prueba de ingreso.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Inicia: 15 Sep</small>
                                <a href="#" class="btn btn-sm btn-outline-sena">Inscribirme</a>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 2: Noticia Comercio -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-noticia h-100 p-3 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge-centro">Comercio y Servicios</span>
                                    <span class="badge badge-success bg-success"><i class="fas fa-newspaper me-1"></i> Noticia</span>
                                </div>
                                <h5 class="fw-bold fs-6 text-dark mt-2 mb-2">Feria de Emprendimiento e Innovación</h5>
                                <p class="small text-secondary mb-3">Aprendices expusieron más de 20 proyectos productivos destacados en el área mercantil.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                                <small class="text-muted"><i class="far fa-clock me-1"></i> Hace 2 días</small>
                                <a href="#" class="btn btn-sm btn-outline-sena">Leer más</a>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 3: Oferta Comercio -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-noticia h-100 p-3 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge-centro">Comercio y Servicios</span>
                                    <span class="badge-oferta"><i class="fas fa-graduation-cap me-1"></i> Convocatoria</span>
                                </div>
                                <h5 class="fw-bold fs-6 text-dark mt-2 mb-2">Tecnólogo en Gestión Contable</h5>
                                <p class="small text-secondary mb-3">Capacítate en sistemas de información financiera y normatividad vigente.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Inicia: 01 Oct</small>
                                <a href="#" class="btn btn-sm btn-outline-sena">Inscribirme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PESTAÑA: COMERCIO Y SERVICIOS -->
            <div class="tab-pane fade" id="tab-comercio" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-noticia h-100 p-3 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge-centro">Comercio y Servicios</span>
                                    <span class="badge-oferta">Convocatoria</span>
                                </div>
                                <h5 class="fw-bold fs-6 text-dark mt-2 mb-2">Tecnólogo en Gestión Contable</h5>
                                <p class="small text-secondary mb-3">Capacítate en sistemas de información financiera y normatividad vigente.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Inicia: 01 Oct</small>
                                <a href="#" class="btn btn-sm btn-outline-sena">Inscribirme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PESTAÑA: TELEINFORMÁTICA -->
            <div class="tab-pane fade" id="tab-teleinfo" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-noticia h-100 p-3 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge-centro">Teleinformática</span>
                                    <span class="badge-oferta">Convocatoria</span>
                                </div>
                                <h5 class="fw-bold fs-6 text-dark mt-2 mb-2">Técnico en Programación de Software</h5>
                                <p class="small text-secondary mb-3">Abierta nueva cohorte presencial. Requisitos: Nivel educativo básico y prueba de ingreso.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Inicia: 15 Sep</small>
                                <a href="#" class="btn btn-sm btn-outline-sena">Inscribirme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>