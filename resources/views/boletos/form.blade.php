<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        
        <div class="form-group mb-2 mb20">
            <label for="id_pasajero" class="form-label">{{ __('Pasajero') }}</label>
            <select name="id_pasajero" class="form-control @error('id_pasajero') is-invalid @enderror" id="id_pasajero">
                <option value="">Selecciona un pasajero</option>
                @foreach($pasajeros as $pasajero)
                    <option value="{{ $pasajero->id }}" {{ old('id_pasajero', $boleto?->id_pasajero) == $boleto->id ? 'selected' : '' }}>
                        {{ $pasajero->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_pasajero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="id_viaje" class="form-label">{{ __('Viaje') }}</label>
            <select name="id_viaje" class="form-control @error('id_viaje') is-invalid @enderror" id="id_viaje">
                <option value="">Selecciona un Viaje</option>
                @foreach($viajes as $viaje)
                    <option value="{{ $viaje->id }}" {{ old('id_viaje', $boleto?->id_viaje) == $boleto->id ? 'selected' : '' }}>
                        {{ $viaje->destino }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_viaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        
        <div class="form-group mb-2 mb20">
            <label for="id_colectivo" class="form-label">{{ __('Colectivo') }}</label>
            <select name="id_colectivo" class="form-control @error('id_colectivo') is-invalid @enderror" id="id_colectivo">
                <option value="">Selecciona un Colectivo</option>
                @foreach($colectivos as $colectivo)
                    <option value="{{ $colectivo->id }}" {{ old('id_viaje', $boleto?->id_colectivo) == $boleto->id ? 'selected' : '' }}>
                        {{ $colectivo->empresa }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_colectivo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $boleto?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora" class="form-label">{{ __('Hora') }}</label>
            <input type="time" name="hora" class="form-control @error('hora') is-invalid @enderror" value="{{ old('hora', $boleto?->hora) }}" id="hora" placeholder="Hora">
            {!! $errors->first('hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>