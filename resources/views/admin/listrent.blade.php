@extends('layouts.main')

<div class="bg-dark">
    <div class="container py-4">
        <div class="d-flex justify-content-end">
            <a class="btn btn-outline-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
        </div>
    </div>
</div>

@section('main-content')
<div class="container">
    <section>
        <div class="header-and-button d-flex justify-content-between align-items-center">
            <h1 class="header">Arriendos</h1>
            <a class="btn btn-outline-primary" href="{{ route('newrent') }}">Nuevo Arriendo</a>
        </div>
        <hr/>
    </section>

    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>RUT</th>
                <th>Patente</th>
                <th>Entrega</th>
                <th>Devolución</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
                <tr>
                    <td>{{ $rental->name }}</td>
                    <td>{{ $rental->rut }}</td>
                    <td>{{$rental->patent}} </td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->return_date }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection

