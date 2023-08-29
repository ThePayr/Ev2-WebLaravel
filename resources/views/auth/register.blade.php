@extends('layouts.auth')

@section('main-content')
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card border-0 rounded-lg mt-5">
                        <div class="card-header bg-light">
                            <h3 class="text-center font-weight-light my-4 text-uppercase">Crear una cuenta</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Nombres"
                                        name="name" />
                                    <label for="name">Nombres</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="surname" type="text" placeholder="Apellidos"
                                        name="surname" />
                                    <label for="surname">Apellidos</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="text" placeholder="email"
                                        name="email" />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="password" placeholder="email"
                                        name="password" />
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="password"
                                    placeholder="password_confirmation" name="password_confirmation" />
                                    <label for="password_confirmation">Repetir contraseña</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="number" placeholder="Telefono"
                                        name="phone" />
                                    <label for="phone">Telefono</label>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-center mt-4 mb-0">
                                    <button class="btn btn-dark px-4" type="submit">Registrarse</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3 bg-light">
                            <div class="fs-6"><a href="{{ route('login') }}">Volver al inicio de sesión</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
