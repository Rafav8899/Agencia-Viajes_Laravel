<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        
        <div class="form-group mb-2 mb20">
            <label for="id_ruta" class="form-label">{{ __('Ruta') }}</label>
            <select name="id_ruta" class="form-control @error('id_ruta') is-invalid @enderror" id="id_ruta">
                <option value="">Selecciona una ruta</option>
                @foreach($rutas as $ruta)
                    <option value="{{ $ruta->id }}" {{ old('id_ruta', $viaje?->id_ruta) == $ruta->id ? 'selected' : '' }}>
                        {{ $ruta->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_ruta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="origen" class="form-label">{{ __('Origen') }}</label>
            <input type="text" name="origen" class="form-control @error('origen') is-invalid @enderror" value="{{ old('origen', $viaje?->origen) }}" id="origen" placeholder="Origen">
            {!! $errors->first('origen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="destino" class="form-label">{{ __('Destino') }}</label>
            <input type="text" name="destino" class="form-control @error('destino') is-invalid @enderror" value="{{ old('destino', $viaje?->destino) }}" id="destino" placeholder="Destino">
            {!! $errors->first('destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duración') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $viaje?->duracion) }}" id="duracion" placeholder="Duración">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="distancia" class="form-label">{{ __('Distancia') }}</label>
            <input type="text" name="distancia" class="form-control @error('distancia') is-invalid @enderror" value="{{ old('distancia', $viaje?->distancia) }}" id="distancia" placeholder="Distancia">
            {!! $errors->first('distancia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $viaje?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>