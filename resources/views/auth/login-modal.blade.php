@guest
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 text-dark">
            
            <div class="modal-header border-0 pb-0 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA" width="30" height="30" class="object-fit-contain">
                    <span class="fw-bold fs-5 text-success" id="loginModalLabel">Portal SENA</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4 pt-2">
                <!-- Selector de pestañas: Iniciar Sesión / Registrarse -->
                <ul class="nav nav-pills nav-pills-sena nav-fill p-1 bg-light rounded-pill mb-4 mt-2" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-semibold" id="tab-login-btn" data-bs-toggle="pill" data-bs-target="#tab-login-pane" type="button" role="tab">
                            <i class="fas fa-sign-in-alt me-1"></i> Iniciar Sesión
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="tab-register-btn" data-bs-toggle="pill" data-bs-target="#tab-register-pane" type="button" role="tab">
                            <i class="fas fa-user-plus me-1"></i> Registrarse
                        </button>
                    </li>
                </ul>

                <!-- Alerta dinámica de mensajes/errores -->
                <div id="auth-alert" class="alert alert-danger d-none py-2 fs-6 rounded-3" role="alert"></div>

                <div class="tab-content" id="authTabsContent">
                    
                    <!-- TAB 1: INICIAR SESIÓN -->
                    <div class="tab-pane fade show active" id="tab-login-pane" role="tabpanel">
                        <form id="form-login-firebase" data-url="{{ route('firebase.login') }}">
                            <div class="mb-3 text-start">
                                <label for="login-email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" class="form-control rounded-3" id="login-email" placeholder="nombre@sena.edu.co" required autocomplete="email">
                            </div>
                            <div class="mb-3 text-start">
                                <label for="login-password" class="form-label fw-semibold">Contraseña</label>
                                <input type="password" class="form-control rounded-3" id="login-password" placeholder="••••••••" required autocomplete="current-password">
                            </div>
                            <button type="submit" id="btn-submit-login" class="btn btn-success w-100 rounded-3 fw-semibold py-2">
                                <i class="fas fa-paper-plane me-1"></i> Iniciar Sesión
                            </button>
                        </form>

                        <div class="d-flex align-items-center my-3">
                            <hr class="flex-grow-1">
                            <span class="px-2 text-muted small fw-bold">O</span>
                            <hr class="flex-grow-1">
                        </div>

                        <!-- Botón Google -->
                        <button type="button" class="btn btn-outline-dark w-100 rounded-3 fw-semibold py-2 d-flex align-items-center justify-content-center gap-2 btn-google-action">
                            <i class="fab fa-google text-danger fs-5"></i> Continuar con Google
                        </button>
                    </div>

                    <!-- TAB 2: REGISTRARSE -->
                    <div class="tab-pane fade" id="tab-register-pane" role="tabpanel">
                        <form id="form-register-firebase" data-url="{{ route('firebase.login') }}">
                            <div class="mb-3 text-start">
                                <label for="register-name" class="form-label fw-semibold">Nombre Completo</label>
                                <input type="text" class="form-control rounded-3" id="register-name" placeholder="Tu nombre y apellidos" required autocomplete="name">
                            </div>
                            <div class="mb-3 text-start">
                                <label for="register-email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" class="form-control rounded-3" id="register-email" placeholder="nombre@sena.edu.co" required autocomplete="email">
                            </div>
                            <div class="mb-3 text-start">
                                <label for="register-password" class="form-label fw-semibold">Contraseña (Mínimo 6 caracteres)</label>
                                <input type="password" class="form-control rounded-3" id="register-password" placeholder="••••••••" minlength="6" required autocomplete="new-password">
                            </div>
                            <div class="mb-3 text-start">
                                <label for="register-password-confirm" class="form-label fw-semibold">Confirmar Contraseña</label>
                                <input type="password" class="form-control rounded-3" id="register-password-confirm" placeholder="••••••••" minlength="6" required autocomplete="new-password">
                            </div>

                            <div class="p-2 mb-3 bg-light rounded-3 text-start small text-muted border">
                                <i class="fas fa-shield-alt text-success me-1"></i>
                                Todo usuario nuevo se registra con el rol <strong>Usuario</strong>. Un administrador podrá asignarte más permisos en caso necesario.
                            </div>

                            <button type="submit" id="btn-submit-register" class="btn btn-success w-100 rounded-3 fw-semibold py-2">
                                <i class="fas fa-user-plus me-1"></i> Crear Cuenta
                            </button>
                        </form>

                        <div class="d-flex align-items-center my-3">
                            <hr class="flex-grow-1">
                            <span class="px-2 text-muted small fw-bold">O</span>
                            <hr class="flex-grow-1">
                        </div>

                        <!-- Botón Google en registro -->
                        <button type="button" class="btn btn-outline-dark w-100 rounded-3 fw-semibold py-2 d-flex align-items-center justify-content-center gap-2 btn-google-action">
                            <i class="fab fa-google text-danger fs-5"></i> Registrarse con Google
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Script de Firebase desacoplado -->
<script type="module" src="{{ asset('js/firebase-auth.js') }}"></script>
@endguest