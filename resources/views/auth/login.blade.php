@extends('layouts.form')

@section('title', 'Inicia sesión ahora')

@section('content')
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">

              <div class="card-body px-lg-5 py-lg-5">
                @if ($errors->any())
                    <div class="text-center text-muted mb-4">
                        <h4>Se encontró el siguiente error</h4>
                    </div>

                    <div class="alert alert-danger mb-4" role="alert">
                        {{ $errors->first() }}
                    </div>
                @else
                    <div class="text-center text-muted mb-4">
                        <small>Introduce tus datos de acceso para entrar al sistema</small>
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Correo electrónico" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Contraseña" type="password" name="password" required autocomplete="current-password">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input name="remember" class="custom-control-input" id="remember_token" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember_token">
                        <span class="text-muted">Recordarme</span>
                    </label>
                </div>
                
                  <div class="text-center">
                    <button type="submit" class="btn btn-danger my-4">Empezar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="{{ route('password.request') }}" class="text-white"><small>¿Olvidaste tu contraseña?</small></a>
              </div>
              <div class="col-6 text-right">
                <a href="{{ route('register')}}" class="text-white"><small>Crear cuenta nueva</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
