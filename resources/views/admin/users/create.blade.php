@extends('admin.layouts.app')

@section('title', 'Criar Usuários')

@section('content')

<h1>Create users</h1>

<x-alert />

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Criar">
</form>
@endsection