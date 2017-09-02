@extends('layouts.admin')
@section('contenido')
    <div class="col-lg-12">
        <h1 class="page-header">Alumnos</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Estos son los alumnos instritos en su escuela.</p>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <center>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            @include('alumno.search')
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <a href="escuela/create" style="text-decoration:none">
                            <button class="btn btn-success btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Registrar Alumno</button>
                            </a>
                        </div>
                    </div>
                </center>
                <br>
                <table style="text-align: center;" width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Autorizados</th>
                            <th>Estado </th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $data)              
                            <tr class="odd gradeX">
                                <td>{{$data->id_alumno}}</td>
                                <td>{{$data->nombre_alumno}} {{$data->apellido_alumno}}</td>
                                <td>{{$data->autorizados_alumno}},
                                    {{$data->nombre_padre_alumno}},
                                    {{$data->nombre_madre_alumno}}
                                </td>
                                @if(($estado =$data->descripcion_estado_tipo)=='Cursando')
                                     <td style="color:green;">
                                        <i class="fa fa-circle" aria-hidden="true"></i> Cursando
                                    </td>
                                @elseif($estado == 'Baja')
                                    <td style="color:red;">
                                        <i class="fa fa-circle" aria-hidden="true"></i> Baja
                                    </td>
                                @endif
                                <td>
                                    <a href="">
                                        <button class="btn btn-info col-xs-12 col-md-6">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                                        </button>
                                    </a>   
                                    <a href="">
                                        <button class="btn btn-warning col-xs-12 col-md-6">
                                            <i class="fa fa-eye" aria-hidden="true"></i> Mostrar
                                        </button>
                                    </a>                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$alumnos->render()}}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
@endsection