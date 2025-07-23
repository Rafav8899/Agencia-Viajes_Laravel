<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        
        <div class="form-group mb-2 mb20">
            <label for="id_conductor" class="form-label">{{ __('Conductor') }}</label>
            <select name="id_conductor" class="form-control @error('id_conductor') is-invalid @enderror" id="id_conductor">
                <option value="">Selecciona un Conductor Responsable</option>
                @foreach($conductores as $conductor)
                    <option value="{{ $conductor->id }}" {{ old('id_conductor', $colectivo?->id_conductor) == $colectivo->id ? 'selected' : '' }}>
                        {{ $conductor->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_conductor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="empresa" class="form-label">{{ __('Empresa') }}</label>
            <input type="text" name="empresa" class="form-control @error('empresa') is-invalid @enderror" value="{{ old('empresa', $colectivo?->empresa) }}" id="empresa" placeholder="Empresa">
            {!! $errors->first('empresa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="patente" class="form-label">{{ __('Patente') }}</label>
            <input type="text" name="patente" class="form-control @error('patente') is-invalid @enderror" value="{{ old('patente', $colectivo?->patente) }}" id="patente" placeholder="Patente">
            {!! $errors->first('patente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $colectivo?->modelo) }}" id="modelo" placeholder="Modelo">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="capacidad" class="form-label">{{ __('Capacidad') }}</label>
            <input type="text" name="capacidad" class="form-control @error('capacidad') is-invalid @enderror" value="{{ old('capacidad', $colectivo?->capacidad) }}" id="capacidad" placeholder="Capacidad">
            {!! $errors->first('capacidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

        <div class="form-group mb-2 mb20">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" required>
            <option value="Disponible">Disponible</option>
            <option value="En Mantenimiento">En Mantenimiento</option>
            </select>            
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>