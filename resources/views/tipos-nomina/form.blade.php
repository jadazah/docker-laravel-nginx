<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nomina" class="form-label">{{ __('Nomina') }}</label>
            <input type="text" name="nomina" class="form-control @error('nomina') is-invalid @enderror" value="{{ old('nomina', $tiposNomina?->nomina) }}" id="nomina" placeholder="Nomina">
            {!! $errors->first('nomina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcio" class="form-label">{{ __('Descripcio') }}</label>
            <input type="text" name="descripcio" class="form-control @error('descripcio') is-invalid @enderror" value="{{ old('descripcio', $tiposNomina?->descripcio) }}" id="descripcio" placeholder="Descripcio">
            {!! $errors->first('descripcio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="borrado" class="form-label">{{ __('Borrado') }}</label>
            <input type="text" name="borrado" class="form-control @error('borrado') is-invalid @enderror" value="{{ old('borrado', $tiposNomina?->borrado) }}" id="borrado" placeholder="Borrado">
            {!! $errors->first('borrado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="retener" class="form-label">{{ __('Retener') }}</label>
            <input type="text" name="retener" class="form-control @error('retener') is-invalid @enderror" value="{{ old('retener', $tiposNomina?->retener) }}" id="retener" placeholder="Retener">
            {!! $errors->first('retener', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="recibo" class="form-label">{{ __('Recibo') }}</label>
            <input type="text" name="recibo" class="form-control @error('recibo') is-invalid @enderror" value="{{ old('recibo', $tiposNomina?->recibo) }}" id="recibo" placeholder="Recibo">
            {!! $errors->first('recibo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>