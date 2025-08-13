@extends('layouts.app')

@section('template_title')
    {{ $hnomina->name ?? __('Show') . " " . __('Hnomina') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Hnomina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('hnominas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Udp:</strong>
                                    {{ $hnomina->udp }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ct:</strong>
                                    {{ $hnomina->ct }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Filiacio:</strong>
                                    {{ $hnomina->filiacio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Curp:</strong>
                                    {{ $hnomina->curp }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $hnomina->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Plaza:</strong>
                                    {{ $hnomina->plaza }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mot Pla:</strong>
                                    {{ $hnomina->mot_pla }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Stat Pla:</strong>
                                    {{ $hnomina->stat_pla }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Desde:</strong>
                                    {{ $hnomina->desde }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasta:</strong>
                                    {{ $hnomina->hasta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cheque:</strong>
                                    {{ $hnomina->cheque }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Importe:</strong>
                                    {{ $hnomina->importe }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ufecmov:</strong>
                                    {{ $hnomina->ufecmov }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario:</strong>
                                    {{ $hnomina->usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Vstatus:</strong>
                                    {{ $hnomina->vstatus }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nomina:</strong>
                                    {{ $hnomina->nomina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Quincena:</strong>
                                    {{ $hnomina->quincena }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Area:</strong>
                                    {{ $hnomina->area }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipocheque:</strong>
                                    {{ $hnomina->tipocheque }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sede:</strong>
                                    {{ $hnomina->sede }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Banco:</strong>
                                    {{ $hnomina->banco }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fpago:</strong>
                                    {{ $hnomina->fpago }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Imprimir:</strong>
                                    {{ $hnomina->imprimir }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estadop:</strong>
                                    {{ $hnomina->estadop }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tiponomina:</strong>
                                    {{ $hnomina->tiponomina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numnomina:</strong>
                                    {{ $hnomina->numnomina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Quincena2:</strong>
                                    {{ $hnomina->quincena2 }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
