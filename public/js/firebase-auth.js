import { initializeApp } from "https://www.gstatic.com/firebasejs/12.18.0/firebase-app.js";
import { 
    getAuth, 
    signInWithEmailAndPassword, 
    createUserWithEmailAndPassword,
    updateProfile,
    GoogleAuthProvider, 
    signInWithPopup 
} from "https://www.gstatic.com/firebasejs/12.18.0/firebase-auth.js";

// Configuración de Firebase
const firebaseConfig = {
    apiKey: "AIzaSyBQSUw-8kC4aa7B4IiPeWEMsRtlMJgdpek",
    authDomain: "admin-sena.firebaseapp.com",
    projectId: "admin-sena",
    storageBucket: "admin-sena.firebasestorage.app",
    messagingSenderId: "1097979546509",
    appId: "1:1097979546509:web:cadc69ec79d095977a4bc4"
};

// Inicializar SDK
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

document.addEventListener('DOMContentLoaded', () => {
    const formLogin = document.getElementById('form-login-firebase');
    const formRegister = document.getElementById('form-register-firebase');
    const btnGoogles = document.querySelectorAll('.btn-google-action');
    const alertBox = document.getElementById('auth-alert');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    function showAlert(msg, isSuccess = false) {
        if (alertBox) {
            alertBox.textContent = msg;
            alertBox.className = `alert ${isSuccess ? 'alert-success' : 'alert-danger'} py-2 fs-6 rounded-3`;
            alertBox.classList.remove('d-none');
        }
    }

    function hideAlert() {
        if (alertBox) {
            alertBox.classList.add('d-none');
        }
    }

    // Limpiar alertas al cambiar de tab
    const tabButtons = document.querySelectorAll('#authTabs button');
    tabButtons.forEach(btn => {
        btn.addEventListener('shown.bs.tab', () => hideAlert());
    });

    async function processLaravelLogin(idToken, loginUrl, userName = null) {
        try {
            const payload = { idToken: idToken };
            if (userName) {
                payload.name = userName;
            }

            const response = await fetch(loginUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken
                },
                body: JSON.stringify(payload)
            });

            const data = await response.json();

            if (data.status === 'success') {
                window.location.reload();
            } else {
                showAlert(data.message || 'Error al validar la sesión con el servidor.');
            }
        } catch (error) {
            showAlert('Ocurrió un error en la conexión con el servidor.');
        }
    }

    // 1. Iniciar Sesión con Correo y Contraseña
    if (formLogin) {
        formLogin.addEventListener('submit', async (e) => {
            e.preventDefault();
            hideAlert();

            const email = document.getElementById('login-email').value.trim();
            const password = document.getElementById('login-password').value;
            const loginUrl = formLogin.dataset.url;
            const submitBtn = document.getElementById('btn-submit-login');

            try {
                if (submitBtn) submitBtn.disabled = true;
                const userCredential = await signInWithEmailAndPassword(auth, email, password);
                const token = await userCredential.user.getIdToken();
                await processLaravelLogin(token, loginUrl);
            } catch (error) {
                if (error.code === 'auth/invalid-credential' || error.code === 'auth/wrong-password' || error.code === 'auth/user-not-found') {
                    showAlert('Correo o contraseña incorrectos.');
                } else if (error.code === 'auth/invalid-email') {
                    showAlert('El formato de correo no es válido.');
                } else if (error.code === 'auth/too-many-requests') {
                    showAlert('Demasiados intentos fallidos. Intenta más tarde.');
                } else {
                    showAlert('No se pudo iniciar sesión. Verifica tus datos.');
                }
            } finally {
                if (submitBtn) submitBtn.disabled = false;
            }
        });
    }

    // 2. Registro de Usuario con Correo, Nombre y Contraseña
    if (formRegister) {
        formRegister.addEventListener('submit', async (e) => {
            e.preventDefault();
            hideAlert();

            const name = document.getElementById('register-name').value.trim();
            const email = document.getElementById('register-email').value.trim();
            const password = document.getElementById('register-password').value;
            const passwordConfirm = document.getElementById('register-password-confirm').value;
            const loginUrl = formRegister.dataset.url;
            const submitBtn = document.getElementById('btn-submit-register');

            if (password !== passwordConfirm) {
                showAlert('Las contraseñas no coinciden.');
                return;
            }

            if (password.length < 6) {
                showAlert('La contraseña debe tener al menos 6 caracteres.');
                return;
            }

            try {
                if (submitBtn) submitBtn.disabled = true;
                
                // Crear usuario en Firebase Auth
                const userCredential = await createUserWithEmailAndPassword(auth, email, password);
                
                // Actualizar el perfil en Firebase con el nombre
                if (name) {
                    await updateProfile(userCredential.user, { displayName: name });
                }

                // Obtener token actualizado
                const token = await userCredential.user.getIdToken(true);

                // Enviar a Laravel para registrar en MySQL con rol 'user'
                await processLaravelLogin(token, loginUrl, name);
            } catch (error) {
                if (error.code === 'auth/email-already-in-use') {
                    showAlert('Este correo ya está registrado. Intenta iniciar sesión.');
                } else if (error.code === 'auth/weak-password') {
                    showAlert('La contraseña es muy débil (mínimo 6 caracteres).');
                } else if (error.code === 'auth/invalid-email') {
                    showAlert('El formato de correo electrónico no es válido.');
                } else {
                    showAlert('Error al registrar usuario: ' + (error.message || 'Intente nuevamente.'));
                }
            } finally {
                if (submitBtn) submitBtn.disabled = false;
            }
        });
    }

    // 3. Autenticación con Google (aplica para login y registro)
    if (btnGoogles && btnGoogles.length > 0) {
        btnGoogles.forEach(btn => {
            btn.addEventListener('click', async () => {
                hideAlert();
                const provider = new GoogleAuthProvider();
                const loginUrl = formLogin ? formLogin.dataset.url : '/firebase-login';

                try {
                    btn.disabled = true;
                    const result = await signInWithPopup(auth, provider);
                    const token = await result.user.getIdToken();
                    const displayName = result.user.displayName || null;
                    await processLaravelLogin(token, loginUrl, displayName);
                } catch (error) {
                    if (error.code !== 'auth/popup-closed-by-user') {
                        showAlert('No se pudo autenticar con Google. Intente nuevamente.');
                    }
                } finally {
                    btn.disabled = false;
                }
            });
        });
    }
});
