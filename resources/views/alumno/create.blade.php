@extends('layouts.admin')
@section('contenido')
    <div class="col-lg-12">
        <h1 class="page-header">Alumnos</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Registrar alumno nuevo. (* Campo obligatorio)</p>
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
                {!!Form::open(array('url'=>'/alumno','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}
                    <div class="form-group">
                        <label for="">Escuela*</label>
                        <select class="form-control" name="escuela_alumno">
                            @foreach($escuelas as $data)
                                 <option value="{{$data->id_escuela}}">{{$data->nombre_escuela}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre*</label>
                        <input type="text" name="nombre_alumno" id="" class="form-control" placeholder="Carlos" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo letras.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos*</label>
                        <input type="text" name="apellido_alumno" id="" class="form-control" placeholder="Lopez" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo letras.</small>
                    </div>
                    <div class="form-group">
                        <label for="">edad*</label>
                        <select class="form-control" name="edad_alumno">
                            @for($i = 1; $i < 21; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dirección*</label>
                        <input type="text" name="direccion_alumno" id="" class="form-control" placeholder="colonia/avenida/calle/man/numero" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser letras y numeros.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre Padre*</label>
                        <input type="text" name="nombre_padre_alumno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo letras.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre Madre*</label>
                        <input type="text" name="nombre_madre_alumno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo letras.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Persona Autorizada</label>
                        <input type="text" name="autorizados_alumno" id="" class="form-control" placeholder="Encaso de faltar los padres" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo letras.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Telefono*</label>
                        <input type="text" name="telefono_alumno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo letras.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Telefono Emergencia*</label>
                        <input type="text" name="telefono_emergencia_alumno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Puede ser solo numeros.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Observaciones</label>
                        <textarea name="observaciones_alumno" class="form-control" rows="3" placeholder="enfermedad/dolencia/estado"></textarea>
                        <small id="helpId" class="text-muted">Puede ser letras y numeros.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto</label>
                        <input type="file" id="exampleInputFile" name="foto_alumno">
                        <p class="help-block">Slecione una foto en formato jpeg,bmp,png.</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                {!!Form::close()!!}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
@endsection