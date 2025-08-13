<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="udp" class="form-label">{{ __('Udp') }}</label>
            <input type="text" name="udp" class="form-control @error('udp') is-invalid @enderror" value="{{ old('udp', $hnomina?->udp) }}" id="udp" placeholder="Udp">
            {!! $errors->first('udp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ct" class="form-label">{{ __('Ct') }}</label>
            <input type="text" name="ct" class="form-control @error('ct') is-invalid @enderror" value="{{ old('ct', $hnomina?->ct) }}" id="ct" placeholder="Ct">
            {!! $errors->first('ct', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="filiacio" class="form-label">{{ __('Filiacio') }}</label>
            <input type="text" name="filiacio" class="form-control @error('filiacio') is-invalid @enderror" value="{{ old('filiacio', $hnomina?->filiacio) }}" id="filiacio" placeholder="Filiacio">
            {!! $errors->first('filiacio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="curp" class="form-label">{{ __('Curp') }}</label>
            <input type="text" name="curp" class="form-control @error('curp') is-invalid @enderror" value="{{ old('curp', $hnomina?->curp) }}" id="curp" placeholder="Curp">
            {!! $errors->first('curp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $hnomina?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="plaza" class="form-label">{{ __('Plaza') }}</label>
            <input type="text" name="plaza" class="form-control @error('plaza') is-invalid @enderror" value="{{ old('plaza', $hnomina?->plaza) }}" id="plaza" placeholder="Plaza">
            {!! $errors->first('plaza', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mot_pla" class="form-label">{{ __('Mot Pla') }}</label>
            <input type="text" name="mot_pla" class="form-control @error('mot_pla') is-invalid @enderror" value="{{ old('mot_pla', $hnomina?->mot_pla) }}" id="mot_pla" placeholder="Mot Pla">
            {!! $errors->first('mot_pla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="stat_pla" class="form-label">{{ __('Stat Pla') }}</label>
            <input type="text" name="stat_pla" class="form-control @error('stat_pla') is-invalid @enderror" value="{{ old('stat_pla', $hnomina?->stat_pla) }}" id="stat_pla" placeholder="Stat Pla">
            {!! $errors->first('stat_pla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desde" class="form-label">{{ __('Desde') }}</label>
            <input type="text" name="desde" class="form-control @error('desde') is-invalid @enderror" value="{{ old('desde', $hnomina?->desde) }}" id="desde" placeholder="Desde">
            {!! $errors->first('desde', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasta" class="form-label">{{ __('Hasta') }}</label>
            <input type="text" name="hasta" class="form-control @error('hasta') is-invalid @enderror" value="{{ old('hasta', $hnomina?->hasta) }}" id="hasta" placeholder="Hasta">
            {!! $errors->first('hasta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cheque" class="form-label">{{ __('Cheque') }}</label>
            <input type="text" name="cheque" class="form-control @error('cheque') is-invalid @enderror" value="{{ old('cheque', $hnomina?->cheque) }}" id="cheque" placeholder="Cheque">
            {!! $errors->first('cheque', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="importe" class="form-label">{{ __('Importe') }}</label>
            <input type="text" name="importe" class="form-control @error('importe') is-invalid @enderror" value="{{ old('importe', $hnomina?->importe) }}" id="importe" placeholder="Importe">
            {!! $errors->first('importe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ufecmov" class="form-label">{{ __('Ufecmov') }}</label>
            <input type="text" name="ufecmov" class="form-control @error('ufecmov') is-invalid @enderror" value="{{ old('ufecmov', $hnomina?->ufecmov) }}" id="ufecmov" placeholder="Ufecmov">
            {!! $errors->first('ufecmov', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario" class="form-label">{{ __('Usuario') }}</label>
            <input type="text" name="usuario" class="form-control @error('usuario') is-invalid @enderror" value="{{ old('usuario', $hnomina?->usuario) }}" id="usuario" placeholder="Usuario">
            {!! $errors->first('usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vstatus" class="form-label">{{ __('Vstatus') }}</label>
            <input type="text" name="vstatus" class="form-control @error('vstatus') is-invalid @enderror" value="{{ old('vstatus', $hnomina?->vstatus) }}" id="vstatus" placeholder="Vstatus">
            {!! $errors->first('vstatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nomina" class="form-label">{{ __('Nomina') }}</label>
            <input type="text" name="nomina" class="form-control @error('nomina') is-invalid @enderror" value="{{ old('nomina', $hnomina?->nomina) }}" id="nomina" placeholder="Nomina">
            {!! $errors->first('nomina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quincena" class="form-label">{{ __('Quincena') }}</label>
            <input type="text" name="quincena" class="form-control @error('quincena') is-invalid @enderror" value="{{ old('quincena', $hnomina?->quincena) }}" id="quincena" placeholder="Quincena">
            {!! $errors->first('quincena', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="area" class="form-label">{{ __('Area') }}</label>
            <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" value="{{ old('area', $hnomina?->area) }}" id="area" placeholder="Area">
            {!! $errors->first('area', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipocheque" class="form-label">{{ __('Tipocheque') }}</label>
            <input type="text" name="tipocheque" class="form-control @error('tipocheque') is-invalid @enderror" value="{{ old('tipocheque', $hnomina?->tipocheque) }}" id="tipocheque" placeholder="Tipocheque">
            {!! $errors->first('tipocheque', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sede" class="form-label">{{ __('Sede') }}</label>
            <input type="text" name="sede" class="form-control @error('sede') is-invalid @enderror" value="{{ old('sede', $hnomina?->sede) }}" id="sede" placeholder="Sede">
            {!! $errors->first('sede', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="banco" class="form-label">{{ __('Banco') }}</label>
            <input type="text" name="banco" class="form-control @error('banco') is-invalid @enderror" value="{{ old('banco', $hnomina?->banco) }}" id="banco" placeholder="Banco">
            {!! $errors->first('banco', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fpago" class="form-label">{{ __('Fpago') }}</label>
            <input type="text" name="fpago" class="form-control @error('fpago') is-invalid @enderror" value="{{ old('fpago', $hnomina?->fpago) }}" id="fpago" placeholder="Fpago">
            {!! $errors->first('fpago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="imprimir" class="form-label">{{ __('Imprimir') }}</label>
            <input type="text" name="imprimir" class="form-control @error('imprimir') is-invalid @enderror" value="{{ old('imprimir', $hnomina?->imprimir) }}" id="imprimir" placeholder="Imprimir">
            {!! $errors->first('imprimir', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estadop" class="form-label">{{ __('Estadop') }}</label>
            <input type="text" name="estadop" class="form-control @error('estadop') is-invalid @enderror" value="{{ old('estadop', $hnomina?->estadop) }}" id="estadop" placeholder="Estadop">
            {!! $errors->first('estadop', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tiponomina" class="form-label">{{ __('Tiponomina') }}</label>
            <input type="text" name="tiponomina" class="form-control @error('tiponomina') is-invalid @enderror" value="{{ old('tiponomina', $hnomina?->tiponomina) }}" id="tiponomina" placeholder="Tiponomina">
            {!! $errors->first('tiponomina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numnomina" class="form-label">{{ __('Numnomina') }}</label>
            <input type="text" name="numnomina" class="form-control @error('numnomina') is-invalid @enderror" value="{{ old('numnomina', $hnomina?->numnomina) }}" id="numnomina" placeholder="Numnomina">
            {!! $errors->first('numnomina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quincena2" class="form-label">{{ __('Quincena2') }}</label>
            <input type="text" name="quincena2" class="form-control @error('quincena2') is-invalid @enderror" value="{{ old('quincena2', $hnomina?->quincena2) }}" id="quincena2" placeholder="Quincena2">
            {!! $errors->first('quincena2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>