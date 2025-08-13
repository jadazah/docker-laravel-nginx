@extends('adminlte::page')

@section('title', 'Hnominas')

@section('content_header')
    
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hnominas') }}
                            </span>
                             <div class="float-right">
                              <form action="{{route('hnominas.index')}}" method="get">
                                    <div class="input-group mb-1 ">
                                        <button class="btn btn-info" type="submit" id="buscar">Buscar</button>
                                        <input type="text" class="form-control" placeholder="Busqueda" name="texto">
                                    </div>      
                              </form> 
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
                                        <th>No</th>
                                        
									<th >Udp</th>
                                    <th >sede</th>
									<th >Ct</th>
									<th >Filiacio</th>
									<th >Nombre</th>
									<th >Plaza</th>
									<th >Periodo</th>
									<th >Cheque</th>
									<th >Importe</th>
									<th >Nomina</th>
									<th >Quincena</th>
									<th >Area</th>
									</tr>
                                </thead>
                                <tbody>
                                    @foreach ($hnominas as $hnomina)
                                    
                                    
                                         <tr class="{{ $hnomina->estadop==='S' ? '' : 'bg-secondary' }}">
                                            <td>{{ $hnomina->id }}</td>
                                            
										<td >{{ $hnomina->udp }}</td>
                                        <td >{{ $hnomina->sede }}</td>
										<td >{{ $hnomina->ct }}</td>
										<td >{{ $hnomina->filiacio }}</td>
										<td >{{ $hnomina->nombre }}</td>
										<td >{{ $hnomina->plaza }}</td>
										<td >{{ $hnomina->desde }}-{{ $hnomina->hasta }}</td>
										<td >{{ $hnomina->cheque }}</td>
										<td >{{ $hnomina->importe }}</td>
										<td >{{ $hnomina->descripcio }}</td>
										<td >{{ $hnomina->quincena }}</td>
										<td >{{ $hnomina->area }}</td>
										
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hnominas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@stop

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>

    <strong>
        <a href="{{ config('app.company_url', '#') }}">
            {{ config('app.company_name', 'IEEPO - PAGADURIA, SAN FELIPE DEL AGUA') }}
        </a>
    </strong>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

