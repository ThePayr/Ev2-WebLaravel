@extends('layouts.main')
@section('main-content')
<div class="container pt-4">
    <h1>Hola, {{ $user->name }}</h1>
    <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
</div>
@endsection
