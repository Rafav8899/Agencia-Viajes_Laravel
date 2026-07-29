@extends('layouts.app')

@section('template_title')
    Colectivos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Colectivos') }}
                            </span>

                                <div class="float-right">
                                <a href="{{ route('colectivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Colectivo') }}
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
									<th>Conductor Designado</th>
                                    <th>Empresa</th>
									<th>Patente</th>
									<th>Modelo</th>
									<th>Capacidad</th>
									<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colectivos as $colectivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
										<td> 
                                            {{ $colectivo->conductore->nombre }}
                                        </td>
                                        <td> {{$colectivo->empresa}} </td>
										<td> {{ $colectivo->patente }}</td>
										<td> {{ $colectivo->modelo }}</td>
										<td> {{ $colectivo->capacidad }}</td>
										<td> {{ $colectivo->estado }}</td>

                                            <td>
                                                <form action="{{ route('colectivos.destroy', $colectivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('colectivos.show', $colectivo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('colectivos.edit', $colectivo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estás seguro de querer borrar?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $colectivos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
