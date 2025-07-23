@extends('layouts.app')

@section('template_title')
    {{ $colectivo->name ?? __('Show') . " " . __('Colectivo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Colectivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('colectivos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Conductor:</strong>
                                    {{ $colectivo->id_conductor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Patente:</strong>
                                    {{ $colectivo->patente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Modelo:</strong>
                                    {{ $colectivo->modelo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Capacidad:</strong>
                                    {{ $colectivo->capacidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $colectivo->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
