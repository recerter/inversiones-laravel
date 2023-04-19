@php
    $pagina = "Agregar instrumento"
@endphp
@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar Nuevo Instrumento</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ route('instrumento.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            Nombre
                            <input type="text" class="form-control input-default " placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            Moneda
                            <select class="form-control default-select form-control-lg" name="moneda">
                                <option value="$">Pesos</option>
                                <option value="U$D">Dolares</option>
                            </select>
                        </div>
                        <div class="form-group">
                            Sigla
                            <input type="text" class="form-control input-default " placeholder="Sigla" name="sigla">
                        </div>
                        <div class="form-group">
                            Sigla API
                            <input type="text" class="form-control input-default " placeholder="Sigla API" name="sigla_api">
                        </div>
                        <div class="form-group">
                            Tipo
                            <select class="form-control default-select form-control-lg" name="tipo">
                                <option value="cedear">Cedear</option>
                                <option value="criptomoneda">Criptomoneda</option>
                                <option value="acciones">Acciones Argentinas</option>
                                <option value="fondos">Fondos</option>
                                <option value="indice">Indices</option>
                                <option value="commodities">Materias Primas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            Imagen
                            <input type="text" class="form-control input-default " placeholder="http://" name="imagen">
                        </div>
                        <div class="form-group">
                            Descripcion
                            <textarea class="form-control" rows="4" id="descripcion" name="descripcion"></textarea>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection