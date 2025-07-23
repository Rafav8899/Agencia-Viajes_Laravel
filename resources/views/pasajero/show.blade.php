@extends('layouts.app')

@section('template_title')
    {{ $pasajero->name ?? __('Show') . " " . __('Pasajero') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Pasajero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pasajeros.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $pasajero->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gmail:</strong>
                                    {{ $pasajero->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $pasajero->tel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>DNI:</strong>
                                    {{ $pasajero->dni }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
