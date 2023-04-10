@php
    $pagina = "Split instrumento"
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
                <form method="POST" action="{{ route('information.updatePhoto') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row form-material">
                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                    <div class="form-group">
                            Instrumento
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="instrumento">
                    
                    <option data-subtext="<?php echo $instrumento["instrumento_nombre"]; ?>"> <?php echo $instrumento["instrumento_sigla"]; ?></option>
                             
                    </select>
                    
                    </div>
                    <div class="form-group">
                            Cantidad
                            <input type="text" class="form-control input-default " placeholder="cantidad" name="cantidad">
                        </div>
                    </div>
                            <button name="agregar" type="submit" value="agregar" class="btn btn-primary btn-lg btn-block">Añadir</button>
                        </div>                 
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection