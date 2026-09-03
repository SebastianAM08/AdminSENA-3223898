<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
            'name',
            'email',
            'password',
            'role', // Added
        ];

        // Método auxiliar para comprobar si es Admin
        public function isAdmin(): bool
        {
            return $this->role === 'admin';
        }

        // Método auxiliar para identificar al Administrador Principal
        public function isPrimaryAdmin(): bool
        {
            return $this->id === 1 || $this->email === 'admin@sena.edu.co';
        }
}