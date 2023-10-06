@extends('layouts.main')
@section('main-content')

<div class="container py-4">
    <label class="d-flex justify-content-start" for="nombres"><strong>Datos del cliente</strong></label>
    <div class="d-flex justify-content-end">
        <a  class="btn btn-outline-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
    </div>
</div>

<div class="container">
    <h1>Arriendos</h1>
    <button >Nuevo Arriendo</button>
    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>RUT</th>
                <th>Patente</th>
                <th>Entrega</th>
                <th>Devolucion</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes incluir dinámicamente filas de datos de proveedores -->
            <!-- Ejemplo de fila de datos (puedes repetir para cada proveedor) -->
            <tr>
                <td>Juan</td>
                <td>10.100.100-1</td>
                <td>WK 70 69</td>
                <td>12-08-2023</td>
                <td>22-08-2023</td>
            </tr>
            <!-- Fin del ejemplo -->
        </tbody>
    </table>
</div>
@endsection
