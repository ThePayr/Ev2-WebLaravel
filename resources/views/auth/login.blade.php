@extends('layouts.auth')

@section('main-content')
    <form action="{{ route('login.attempt') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card border-0 rounded-lg mt-5">
                        <div class="card-header bg-light">
                            <h3 class="text-center font-weight-light my-4 text-uppercase">Iniciar sesión</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" placeholder="Usuario"
                                        name="username" />
                                    <label for="inputEmail">Usuario</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password" placeholder="password"
                                        name="password" />
                                    <label for="inputPassword">Contraseña</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                        name="remember" />
                                    <label class="form-check-label" for="inputRememberPassword">Recordarme</label>
                                </div>
                                <div class="d-flex justify-content-center mt-4 mb-0">
                                    <button class="btn btn-dark px-4" type="submit">Acceder</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3 bg-light">
                            <div class="fs-6"><a href="{{ route('register') }}">Crear una cuenta</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
