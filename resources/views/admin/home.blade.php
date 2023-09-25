@extends('layouts.main')
@section('main-content')
<div class="container pt-4">
    @foreach($categories as $key => $category)
    <h1>Categoria:  {{ $category->name }}</h1>
        <ul>
            @foreach ($category->vehicles as $vehicle)
                <li> {{ $vehicle->patent }} </li>
                <li> {{ $vehicle->year }} </li>
                <li> {{ $vehicle->model }} </li>
                <li> {{ $vehicle->brand }} </li>
            @endforeach
        </ul>
    @endforeach
    <br />
    <br />
    <br />
    <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
</div>
@endsection
