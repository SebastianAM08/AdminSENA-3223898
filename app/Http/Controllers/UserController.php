<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('user.index', compact('users'));
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        // Proteger al Administrador Principal
        if ($user->isPrimaryAdmin() && $request->role !== 'admin') {
            return back()->with('error', 'El rol del Administrador Principal no puede ser modificado.');
        }

        // Evitar que el administrador se quite el rol a sí mismo por accidente
        if (auth()->id() === $user->id && $request->role !== 'admin') {
            return back()->with('error', 'No puedes quitarte el rol de administrador a ti mismo.');
        }

        $user->role = $request->role;
        $user->save();

        return back()->with('success', 'Rol actualizado correctamente.');
    }
}