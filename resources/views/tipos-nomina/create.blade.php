@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tipos Nomina
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tipos Nomina</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tipos-nominas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipos-nomina.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
