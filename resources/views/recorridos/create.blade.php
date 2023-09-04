@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Agregar Registro de Nóminas</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('recorridos.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="idRuta">Ruta</label>
                <select class="form-control" name="idRuta" id="idRuta" required>
                    <option value="" disabled selected>Seleccione un despacho</option>
                    @foreach ($rutas as $rut)
                        <option value="{{ $rut->idRuta }}">{{ $rut->tiempoEstimado }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una ruta.</div>
            </div>
            <div class="form-group">
                <label for="idRotacion">Rotación</label>
                <select class="form-control" name="idRotacion" id="idRotacion" required>
                    <option value="" disabled selected>Seleccione una rotación</option>
                    @foreach ($rotaciones as $tot)
                        <option value="{{ $rot->idRotacion }}">{{ $rot->fechaAsignacion }} {{ $rot->fechaFinasignacion }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Por favor seleccione una rotación.</div>
            </div>
            <div class="form-group">
                <label for="numPasajeros">Cant. Pasajeros</label>
                <input type="text" class="form-control" name="numPasajeros" id="numPasajeros" required>
                <div class="invalid-feedback">Por favor ingrese el número de pasajeros.</div>
            </div>
            <div class="form-group">
                <label for="fechaHoraInicio">Fecha/hora Inicio</label>
                <input type="text" class="form-control" name="fechaHoraInicio" id="fechaHoraInicio" required>
                <div class="invalid-feedback">Por favor ingrese la fecha de asignación.</div>
            </div>
            <div class="form-group">
                <label for="fechaHoraFin">Fecha/hora fin</label>
                <input type="text" class="form-control" name="fechaHoraFin" id="fechaHoraFin" required>
                <div class="invalid-feedback">Por favor ingrese la fecha fin de asignación.</div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
        </form>
    </div>
    <div class="card-footer">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2023 <a href="#" class="font-weight-bold">{{ config('app.name') }}</a></p>
            </div>
            <div class="col-md-6 text-md-right">
                <ul class="nav nav-footer justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link">¿Quiénes somos?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
