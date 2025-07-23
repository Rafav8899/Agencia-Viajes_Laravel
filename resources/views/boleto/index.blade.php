@extends('layouts.app')

@section('template_title')
    Boletos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Boletos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('boletos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Boleto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th>Nro</th>
									<th>Pasajero</th>
                                    <th>Destino</th>
									<th>Empresa</th>
                                    <th>Patente</th>
									<th>Fecha</th>
									<th>Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($boletos as $boleto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td> {{ $boleto->pasajero->nombre }}</td>
										<td> {{ $boleto->viaje->destino }} </td>
										<td> {{ $boleto->colectivo->empresa }} </td>
										<td> {{ $boleto->fecha }} </td>
										<td> {{ $boleto->hora }} </td>
                                        <td> ${{ $boleto->viaje->precio }} </td>

                                            <td>
                                                <form action="{{ route('boletos.destroy', $boleto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('boletos.show', $boleto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('boletos.edit', $boleto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estás seguro de querer borrar esta información?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $boletos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
