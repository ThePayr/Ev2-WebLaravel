@extends('layouts.main')

@section('main-content')
<form action="{{ route('login.attempt') }}" method="post">
    @csrf
    <input type="text" placeholder="Usuario" name="username" />
    <input type="password" placeholder="Contraseña" name="password" />
    <input type="submit" value="enviar" />
</form>
@endsection
