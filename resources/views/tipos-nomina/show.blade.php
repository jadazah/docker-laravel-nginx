@extends('layouts.app')

@section('template_title')
    {{ $tiposNomina->name ?? __('Show') . " " . __('Tipos Nomina') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipos Nomina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipos-nominas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nomina:</strong>
                                    {{ $tiposNomina->nomina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcio:</strong>
                                    {{ $tiposNomina->descripcio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Borrado:</strong>
                                    {{ $tiposNomina->borrado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Retener:</strong>
                                    {{ $tiposNomina->retener }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Recibo:</strong>
                                    {{ $tiposNomina->recibo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
