@extends('layouts.app')

@section('template_title')
    {{ $boleto->name ?? __('Show') . " " . __('Boleto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Boleto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('boletos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Pasajero:</strong>
                                    {{ $boleto->pasajero->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>DNI:</strong>
                                    {{ $boleto->pasajero->dni }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Origen:</strong>
                                    {{ $boleto->viaje->origen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Destino:</strong>
                                    {{ $boleto->viaje->destino }}
                                </div>
                                
                                <div class="form-group mb-2 mb20">
                                    <strong>Empresa:</strong>
                                    {{ $boleto->colectivo->empresa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Patente:</strong>
                                    {{ $boleto->colectivo->patente }}
                                </div>
                                
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $boleto->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora:</strong>
                                    {{ $boleto->hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio: </strong>
                                    ${{ $boleto->viaje->precio }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
