@extends('layouts.admin')
@section('contenido')
    <div class="col-lg-12">
        <h1 class="page-header">Escuelas</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Crear una nueva escuela.</p>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @if(count($errors)>0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!!Form::open(array('url'=>'/escuela','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}
                    <div class="form-group">
                        <label for="">Nombre de la escuela</label>
                        <input type="text" name="nombre_escuela" id="" class="form-control" placeholder="Colegio de antorcha" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser letras y numeros.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Direcion de la escuela</label>
                        <input type="text" name="direcion_escuela" id="" class="form-control" placeholder="calle/avenida/colonia/numero" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser letras y numeros.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Tipo de escuela</label>
                        <select class="form-control" name="tipo_escuela">
                            @foreach($tipos as $data)
                                 <option value="{{$data->id_tipo_escuela}}">{{$data->descripcion_tipo_escuela}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                {!!Form::close()!!}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
@endsection