@extends('admin.layouts.app')

@section('title', 'Criar Usuários')

@section('content')

<h1>Create users</h1>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div style="color: red;">
    {{ $error }}
</div>
@endforeach
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Criar">
</form>
@endsection