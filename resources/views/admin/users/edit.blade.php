@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')

<h1>Editar users - {{ $user->name }}</h1>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div style="color: red;">
    {{ $error }}
</div>
@endforeach
@endif

<form action="{{ route('users.update', $user->id ) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Editar">
</form>
@endsection