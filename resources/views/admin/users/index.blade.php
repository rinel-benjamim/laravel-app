@extends('admin.layouts.app')
@section('title', 'Usuários')
@section('content')

<h1>Users</h1>

<a href="{{ route('users.create') }}">Adicionar</a>

<x-alert/>

<table border="1px">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
            <td><a href="{{ route('users.show', $user->id) }}">Show</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">
                Nenhum usuário cadastrado
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
{{ $users->links() }}

@endsection