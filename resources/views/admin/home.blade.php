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
            <h1 class="header">Dashboard</h1>
        </div>
    <hr/>
    </section>
    <div class="d-flex justify-content-between align-items-center">
        <label><strong>Vehiculos existentes en cada categoría</strong></label>
        <label><strong>Total de arriendos registrados</strong></label>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th style="text-align: center">Total de vehiculos</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categoryCounts as $categoryCount)
                <tr>
                    <td>Categoría {{ $categoryCount->name }}</td>
                    <td style="text-align: center">{{ $categoryCount->vehicle_count }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="margin-left: 110px; margin-right: 110px">
            <h1><label><strong>{{ $totalRentals }}</strong></label></h1>
        </div>
    </div>
</div>
@endsection

    {{-- @if($errors->any())
        <div class="alert alert-danger my-4" role="alert">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </div>
    @endif --}}



{{--
    <section class="section-separator">
        <h5>Crear nuevas categorias</h5>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Nombre de la categoria" name="name">
            <input type="submit" value="Crear categoría">
        </form>
    </section>
    <hr /> --}}

    {{-- <h5 class="section-separator mb-4">Listar nuevas categorias</h5>
    @foreach($categories as $key => $category)
        <section class="mb-5">
            <h6>Categoría: {{ $category->name }} ( id: {{ $category->id }})</h6>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Patente</th>
                    <th scope="col">Año</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($category->vehicles as $vehicle)
                <tr>
                    <td scope="row">{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->patent }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>
{{--
     IMPORTANTE

     Por defecto las solicitudes en los navegadores son post o get. Cuando uno define un metodo diferente para la ruta en laravel (en este caso delete),
     Debe enviar la petición dentro de un formulario y especificar el metodo con @method().
     El @csrf generará un token unico para el formulario que laravel gestiona por detrás de escena, con ello previene ataques maliciosos en los formularios
--}}
                        {{-- <form action="{{ route('vehicles.delete', ['id' => $vehicle->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-outline-secondary btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    @endforeach
</div>
@endsection


@push('css')
<style>
    .section-separator {
        margin-top: 80px;
    }
</style>
@endpush --}}
