@extends('layouts.admin')
@section('contenido')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 5d09edd... tarifas
    <h3>create</h3>

=======
=======
>>>>>>> 7b0b23ce548e0cdaab13ee5a58833e8cc48ecb49
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
                            <option value="1">Guarderia</option>
                            <option value="2">Kinder</option>
                            <option value="3">Primaria</option>
                            <option value="4">Secundaria</option>
                            <option value="5">Maternal</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                {!!Form::close()!!}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
<<<<<<< HEAD
>>>>>>> 7b0b23ce548e0cdaab13ee5a58833e8cc48ecb49
=======
>>>>>>> 7b0b23ce548e0cdaab13ee5a58833e8cc48ecb49
=======
    <h3>create</h3>
>>>>>>> parent of e310e4c... tarifas
@endsection