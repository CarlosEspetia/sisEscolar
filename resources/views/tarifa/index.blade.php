@extends('layouts.admin')
@section('contenido')

 <div class="col-lg-12">
        <h1 class="page-header">Tarifas</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Estas son las tarifas que administras.</p>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <center>
                    <div class="row">
                         <div class="col-md-6 col-xs-12">
                            @include('tarifa.search')
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <a href="tarifa/create" style="text-decoration:none">
                            <button class="btn btn-success btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Crear Tarifa</button>
                            </a>
                        </div>
                    </div>
                </center>
                <br>
                <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Concepto</th>
                            <th>Cantidad</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($tarifas as $data)
						<tr class="odd gradeX">
							<td>{{$data->id_tarifa}}</td>
							<td>{{$data->concepto}}</td>
							<td>{{$data->monto}}</td>
							<td>
								<a href="">
                                    <button class="btn btn-info">
                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                                    </button>
                                </a>  
							</td>
						</tr>
						@endforeach
                    </tbody>
                </table>
                {{$tarifas->render()}}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 

@endsection