@extends('admin.layouts.app')

@section('title', 'Criar Usuários')

@section('content')

<h1>User Informations</h1>

<x-alert />

<ul>
    <li>Name: $user->name</li>
    <li>E-mail: $user->email</li>
    <li>Criado em: $user->created_at</li>
</ul>

@endsection