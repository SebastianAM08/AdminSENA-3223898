@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Gestión de Usuarios y Roles</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="table-responsive bg-white rounded shadow-sm p-3">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol Actual</th>
                    <th>Cambiar Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->isPrimaryAdmin())
                                <span class="badge bg-success">
                                    <i class="fas fa-crown me-1"></i> ADMIN PRINCIPAL
                                </span>
                            @else
                                <span class="badge {{ $user->role === 'admin' ? 'bg-danger' : 'bg-secondary' }}">
                                    {{ strtoupper($user->role) }}
                                </span>
                            @endif
                        </td>
                        <td>
                            @if($user->isPrimaryAdmin())
                                <span class="badge bg-light text-secondary border px-2 py-1">
                                    <i class="fas fa-lock me-1 text-warning"></i> Protegido
                                </span>
                            @else
                                <form action="{{ route('users.updateRole', $user->id) }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    @method('PATCH')
                                    <select name="role" class="form-select form-select-sm" style="width: auto;">
                                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Usuario</option>
                                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrador</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
</div>
@endsection