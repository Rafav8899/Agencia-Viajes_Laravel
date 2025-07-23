@extends('layouts.app')

@section('template_title')
    {{ $viaje->name ?? __('Show') . " " . __('Viaje') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('viajes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>
 
                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Ruta:</strong>
                                    {{ $viaje->id_ruta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Origen:</strong>
                                    {{ $viaje->origen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Destino:</strong>
                                    {{ $viaje->destino }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Duración:</strong>
                                    {{ $viaje->duracion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Distancia:</strong>
                                    {{ $viaje->distancia }}km
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    ${{ $viaje->precio }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
