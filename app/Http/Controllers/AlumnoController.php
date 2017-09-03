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
    public function index(Request $request)
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
        ->select('id_escuela','nombre_escuela')
        ->get();
        return view('alumno.create',['escuelas'=>$escuela]);
    }
    public function store(AlumnoRequest $request)
    {
        $alumno = new Alumno();
        $alumno->escuela_alumno = $request->get('escuela_alumno');
        $alumno->estado_alumno = '1';
        $alumno->nombre_alumno = $request->get('nombre_alumno');
        $alumno->apellido_alumno = $request->get('apellido_alumno');
        $alumno->direccion_alumno = $request->get('direccion_alumno');
        $alumno->telefono_emergencia_alumno = $request->get('telefono_emergencia_alumno');
        $alumno->autorizados_alumno = $request->get('autorizados_alumno');
        $alumno->observaciones_alumno = $request->get('observaciones_alumno');
        $alumno->edad_alumno = $request->get('edad_alumno');
        $alumno->telefono_alumno = $request->get('telefono_alumno');
        $alumno->nombre_padre_alumno = $request->get('nombre_padre_alumno');
        $alumno->nombre_madre_alumno = $request->get('nombre_madre_alumno');
        if(Input::hasFile('foto_alumno'))
        {
            $file = Input::file('foto_usuario');
            $file->move()
        }
        $alumno->save();
        return Redirect::to('/alumno');
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
