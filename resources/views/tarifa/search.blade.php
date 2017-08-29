{!! Form::open(array('url'=>'/tarifa','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="input-group">
    <input type="text" class="form-control" placeholder="Buscar por nombre..." name="TextoBusqueda" value="{{$TextoBusqueda}}">
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
</div>
{{Form::close()}}