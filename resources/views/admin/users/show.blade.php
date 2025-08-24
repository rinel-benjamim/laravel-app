@extends('admin.layouts.app')

@section('title', 'Criar Usuários')

@section('content')

<h1>User Informations</h1>

<x-alert />

<ul>
    <li>Name: {{ $user->name }}</li>
    <li>E-mail: {{ $user->email }}</li>
    <li>Criado em: {{ $user->created_at }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete User">
</form>

@endsection