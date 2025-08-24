@extends('admin.layouts.app')

@section('title', 'Criar Usuários')

@section('content')

<h1>Create users</h1>

<x-alert />

<form action="{{ route('users.store') }}" method="POST">
    @include('admin.users.components.form')
</form>
@endsection