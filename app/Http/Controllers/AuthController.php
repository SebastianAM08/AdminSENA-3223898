<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function firebaseLogin(Request $request)
    {
        $idToken = $request->input('idToken');

        if (!$idToken) {
            return response()->json(['status' => 'error', 'message' => 'Token no proporcionado'], 400);
        }

        // Clave API de tu proyecto Firebase
        $apiKey = "AIzaSyBQSUw-8kC4aa7B4IiPeWEMsRtlMJgdpek";

        // Validar token con Google/Firebase Identity Toolkit API
        $response = Http::post("https://identitytoolkit.googleapis.com/v1/accounts:lookup?key={$apiKey}", [
            'idToken' => $idToken
        ]);

        if ($response->failed()) {
            return response()->json(['status' => 'error', 'message' => 'Token de Firebase no válido'], 401);
        }

        $firebaseUserData = $response->json()['users'][0] ?? null;

        if (!$firebaseUserData) {
            return response()->json(['status' => 'error', 'message' => 'Usuario no encontrado en Firebase'], 404);
        }

        $email = $firebaseUserData['email'];
        $name = $request->input('name') ?: ($firebaseUserData['displayName'] ?? explode('@', $email)[0]);

        // Buscar usuario o crearlo con el rol 'user' por defecto
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => bcrypt(Str::random(16)),
                'role' => 'user'
            ]
        );

        // Iniciar la sesión de Laravel
        Auth::login($user, true);

        // ⚠️ CRÍTICO: Regenera la cookie de sesión para el navegador
        $request->session()->regenerate();

        return response()->json([
            'status' => 'success',
            'message' => 'Sesión iniciada correctamente',
            'role' => $user->role
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}