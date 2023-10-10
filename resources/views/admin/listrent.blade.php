@extends('layouts.main')
<div class="bg-dark">
    <div class="header-and-button d-flex justify-content-between align-items-center">
        <h3 style="color:white"><strong>ArriendAPP</strong></h3>
        <a class="btn btn-outline-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
    </div>
</div>
@section('main-content')
    <div class="container">
        <section>
            <div class="header-and-button d-flex justify-content-between align-items-center">
                <h1 class="header">Arriendos</h1>
                <a class="btn btn-outline-primary" href="{{ route('newrent') }}">Nuevo Arriendo</a>
            </div>
            <hr />
        </section>

        <table class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>RUT</th>
                    <th>Patente</th>
                    <th>Entrega</th>
                    <th>Devolución</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals as $rental)
                    <tr>
                        <td>{{ $rental->name }} </td>
                        <td>{{ $rental->rut }}</td>
                        <td>{{ $rental->patent }}</td>
                        <td>{{ $rental->start_date }}</td>
                        <td>{{ $rental->return_date }}</td>
                        <td>
                            <form action="{{ route('rent.delete', $rental->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
