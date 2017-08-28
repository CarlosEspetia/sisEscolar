{!! Form::open(array('url'=>'/escuela','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="input-group">
    <input type="text" class="form-control" placeholder="Buscar por nombre..." name="textoBusqueda" value="{{$textoBusqueda}}">
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
</div>
{{Form::close()}}