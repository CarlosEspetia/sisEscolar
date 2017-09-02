<?php

namespace sisEscolar\Http\Controllers;

use Illuminate\Http\Request;

use sisEscolar\Http\Requests;

use sisEscolar\Alumno;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;

use sisEscolar\Http\Requests\AlumnoRequest;

use DB;

class AlumnoController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(Request $request)//Metodo.
    {
        if ($request)
        {
            $query = trim($request->get('textoBusqueda'));
            $alumnos = DB::table('alumnos as a')
            ->join('escuelas as e','a.escuela_alumno','=','e.id_escuela')
            ->join('estado_tipo as et','a.estado_alumno','=','et.id_estado_tipo')
            ->select('a.id_alumno',
                    'a.nombre_alumno',
                    'a.autorizados_alumno',
                    'a.nombre_padre_alumno',
                    'a.nombre_madre_alumno',
                    'a.apellido_alumno',
                    'et.descripcion_estado_tipo')
            ->where('nombre_alumno','LIKE','%'.$query.'%')
            ->orderBy('id_alumno','asc')
            ->paginate(5);
            return view('alumno.index', ["alumnos"=>$alumnos,"textoBusqueda"=>$query]);
        }
    }
    public function create()
    {
        $escuela = DB::table('escuelas')
        ->select('id_escuela','nombre_escuela');
        $estado = DB::table('estado_tipo')
        ->select('id_estado_tipo','descriopcion_estado_tipo');
        return view('alumno.create',['escuela'=>$escuela,'']);
    }
    public function store(EscuelaRequest $request)
    {
        $escuela = new Escuela();
        $escuela->nombre_escuela = $request->get('nombre_escuela');
        $escuela->direcion_escuela = $request->get('direcion_escuela');
        $escuela->tipo_escuela = $request->get('tipo_escuela');
        $escuela->save();
        return Redirect::to('/escuela');
    }
    public function show($id_escuela)
    {
        return view('escuela.show', ['escuela'=>Escuela::findOrFail($id_escuela)]);
    }
    public function edit($id_escuela)
    {
        $tipo_escuela = DB::table('tipo_escuela')->get();
        return view('escuela.edit', ['escuela'=>Escuela::findOrFail($id_escuela),'tipos'=>$tipo_escuela]);
    }
    public function update(EscuelaRequest $request, $id_escuela)
    {
        $escuela = Escuela::findOrFail($id_escuela);
        $escuela->nombre_escuela = $request->get('nombre_escuela');
        $escuela->direcion_escuela = $request->get('direcion_escuela');
        $escuela->tipo_escuela = $request->get('tipo_escuela');
        $escuela->update();
        return Redirect::to('/escuela');
    }
    //Pendiente para la interpretacion de su funcinamiento.
    public function destroy($id_escuela)
    {
    }
}
