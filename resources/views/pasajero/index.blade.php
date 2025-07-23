@extends('layouts.app')

@section('template_title')
    Pasajeros
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pasajeros') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('pasajeros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo Pasajero') }}
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
                                        
									<th>Nombre</th>
									<th>Gmail</th>
									<th>Telefono</th>
									<th>DNI</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pasajeros as $pasajero)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $pasajero->nombre }}</td>
										<td >{{ $pasajero->email }}</td>
										<td >{{ $pasajero->tel }}</td>
										<td >{{ $pasajero->dni }}</td>

                                            <td>
                                                <form action="{{ route('pasajeros.destroy', $pasajero->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pasajeros.show', $pasajero->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pasajeros.edit', $pasajero->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $pasajeros->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
