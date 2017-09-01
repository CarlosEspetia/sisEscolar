@extends('layouts.admin')
@section('contenido')
    <div class="col-lg-12">
        <h1 class="page-header">Editar Tarifa: {{ $tarifa->concepto}}</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Editar una tarifa.</p>
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
                {!!Form::model($tarifa,['method'=>'PATCH','route'=>['tarifa.update',$tarifa->id_tarifa]])!!}
                {{Form::token()}}
                    <div class="form-group">
                        <label for="">Concepto</label>
                        <input type="text" name="concepto" id="" class="form-control" value="{{$tarifa->concepto}}" placeholder="Ej: Colegiatura, Mensualidad" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Únicamente pueden ser letras</small>
                    </div>
                    <div class="form-group">
                        <label for="">Monto</label>
                        <input type="text" name="monto" id="" class="form-control" value="{{$tarifa->monto}}" placeholder="$" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Únicamente pueden ser números</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                {!!Form::close()!!}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
@endsection