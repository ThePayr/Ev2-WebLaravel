@extends('layouts.main')
@section('main-content')

<div class="container py-4">
    <div class="d-flex justify-content-end">
        <a  class="btn btn-outline-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
    </div>
</div>
<div class="container">
    <section>
        <div class="header-and-button d-flex justify-content-between align-items-center">
            <h1 class="header">Nuevo Arriendo</h1>
        </div>
        <hr />
    </section>
    <div class="row mt-4">
        <!-- Columna 1: Datos del cliente -->
        <div class="col-md-6">
            <label for="nombres"><strong>Datos del cliente</strong></label>
            <div class="input-group mt-2">
                <span class="input-group-text">Nombres</span>
                <input type="text" class="form-control" name="names">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Apellido Paterno</span>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Apellido Materno</span>
                <input type="text" class="form-control" name="second_last_name">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">RUT</span>
                <input type="text" class="form-control" name="rut">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Email</span>
                <input type="text" class="form-control" name="email">
            </div>
        </div>

        <!-- Columna 2: Detalles de arriendo -->
        <div class="col-md-6">
            <label for="patente"><strong>Datos del vehiculo</strong></label>
            <div class="input-group mt-2">
                <span class="input-group-text">Patente</span>
                <input type="text" class="form-control" name="patente">
            </div>
            <label for="nombres"><strong>Sobre el prestamo</strong></label>
            <div class="input-group mt-2">
                <span class="input-group-text">Fecha de Entrega</span>
                <input type="text" class="form-control" name="fecha_entrega">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Fecha de Devolución</span>
                <input type="text" class="form-control" name="fecha_devolucion">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <input type="submit" value="Guardar" class="btn btn-primary">
    </div>
</div>
@endsection