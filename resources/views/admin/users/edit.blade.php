@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')

<h1>Editar users - {{ $user->name }}</h1>


<x-alert />
<form action="{{ route('users.update', $user->id ) }}" method="POST">
    @method('PUT')
    @include('admin.users.components.form')
</form>
@endsection